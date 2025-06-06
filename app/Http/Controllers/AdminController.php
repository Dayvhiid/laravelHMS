<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Drug;
use App\Models\Invo;
use App\Models\Lens;
use App\Models\Test;
 use App\Models\PatientInfo;
use App\Models\Event;
// use Illuminate\Support\Carbon;
use App\Models\Frame;
use App\Models\Inventory;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin2.admin2');
    }
      public function indexTwo(){
        return view('admin.admin2.newadmin2');
    }
    public function drugsIndex(){
        return view('admin.admin2.admin2drugs');
    }
    public function drugsIndexTwo(){
        return view('admin.admin2.admin2drugsIndex');
    }
    public function inventoryIndex(){
        $item = Inventory::paginate(9);
        return view ('admin.admin2.admin2inventory', ['item' => $item]);
    }
    public function drugList(){
        $drugs = Drug::paginate(9);
        return view('admin.admin2.admin2druglist', ['drugs' => $drugs]);
    }
    public function frameIndex(){
        return view('admin.admin2.admin2frame');
    }
      public function frameIndexTwo(){
        return view('admin.admin2.newadmin2frame');
    }
    public function frameList(){
        $frames = Frame::paginate(9);
        return view('admin.admin2.admin2framelist', [ 'frames' => $frames]);
    }
    public function lensIndex(){
        return view('admin.admin2.admin2lens');
    }
     public function lensIndexTwo(){
        return view('admin.admin2.newadmin2lens');
    }
    public function lensList(){
        $lens = Lens::paginate(9);
        return view('admin.admin2.admin2lenslist', [ 'lens' => $lens]);
    }
     public function dashboard(){

      $now = Carbon::now();
        
        // Get count of all upcoming events
        $upcomingEventsCount = Event::where('end', '>', $now)->count();
        
        // Get the closest upcoming event
        $nextEvent = Event::where('start', '>', $now)
                          ->orderBy('start', 'asc')
                          ->first();

        $appointment_count = Appointment::count();
        $appointments = Appointment::latest()->take(10)->get();
        return view('admin.dashboard',  [ 'appointment_count' => $appointment_count, 
                                           'appointments' => $appointments,
                                           'upcomingEventsCount' => $upcomingEventsCount,
                                             'nextEvent' => $nextEvent->title ?? 'No upcoming events',
                                        ]);
    }

    // public function demographics(){
    //     return view('admin.demographics');
    // }

   

public function demographics() {
    // Get counts for each age group and gender
    $ageGroups = [
        '0-18' => [
            'male' => PatientInfo::where('gender', 'male')
                        ->whereBetween('age', [0, 18])
                        ->count(),
            'female' => PatientInfo::where('gender', 'female')
                          ->whereBetween('age', [0, 18])
                          ->count(),
        ],
        '19-35' => [
            'male' => PatientInfo::where('gender', 'male')
                        ->whereBetween('age', [19, 35])
                        ->count(),
            'female' => PatientInfo::where('gender', 'female')
                          ->whereBetween('age', [19, 35])
                          ->count(),
        ],
        '36-55' => [
            'male' => PatientInfo::where('gender', 'male')
                        ->whereBetween('age', [36, 55])
                        ->count(),
            'female' => PatientInfo::where('gender', 'female')
                          ->whereBetween('age', [36, 55])
                          ->count(),
        ],
        '56-75' => [
            'male' => PatientInfo::where('gender', 'male')
                        ->whereBetween('age', [56, 75])
                        ->count(),
            'female' => PatientInfo::where('gender', 'female')
                          ->whereBetween('age', [56, 75])
                          ->count(),
        ],
        '75+' => [
            'male' => PatientInfo::where('gender', 'male')
                        ->where('age', '>', 75)
                        ->count(),
            'female' => PatientInfo::where('gender', 'female')
                          ->where('age', '>', 75)
                          ->count(),
        ],
    ];

    // Calculate totals
    $totals = [
        'male' => PatientInfo::where('gender', 'male')->count(),
        'female' => PatientInfo::where('gender', 'female')->count(),
        'all' => PatientInfo::count()
    ];

    return view('admin.demographics', compact('ageGroups', 'totals'));
}

public function staff(){
    return view('admin.staff');
}


public function inventoryAnalytics(){
    $threshold = 10; // Quantity threshold for low stock

    // Summary Data
    $totalDrugs = Drug::count();
    $totalFrames = Frame::count();
    $totalLenses = Lens::count();
    $total = $totalDrugs + $totalFrames + $totalLenses;

    $valueDrugs = Drug::sum(DB::raw('price * quantity'));
    $valueFrames = Frame::sum(DB::raw('price * quantity'));
    $valueLenses = Lens::sum(DB::raw('price * quantity'));
    $totalValue = $valueDrugs + $valueFrames + $valueLenses;

    $lowStockDrugs = Drug::where('quantity', '<', $threshold)->count();
    $lowStockFrames = Frame::where('quantity', '<', $threshold)->count();
    $lowStockLenses = Lens::where('quantity', '<', $threshold)->count();
    $lowStockTotal = $lowStockDrugs + $lowStockFrames + $lowStockLenses;



    $dateLabels = [];
    $inventoryValues = [];

    // for ($i = 30; $i >= 0; $i -= 5) {
    //     $date = Carbon::now()->subDays($i)->format('M d');
    //     $value = rand(20000, 40000); // Fake data; replace with real logic from DB

    //    $record = Inventory::whereDate('date', $date)->first();

    // // If record found, get its value, otherwise 0 or null
    // $value = $record ? $record->value : 0;


    //     $dateLabels[] = $date;
    //     $inventoryValues[] = $value;
    // }


    

for ($i = 30; $i >= 0; $i--) {
    $date = Carbon::now()->subDays($i)->toDateString(); // e.g. 2025-04-28

    // Sum price * quantity for all items added on or before this date (cumulative)
    $drugValue = Drug::whereDate('created_at', '<=', $date)
        ->sum(DB::raw('price * quantity'));

    $frameValue = Frame::whereDate('created_at', '<=', $date)
        ->sum(DB::raw('price * quantity'));

    $lensValue = Lens::whereDate('created_at', '<=', $date)
        ->sum(DB::raw('price * quantity'));

    $totalValue = $drugValue + $frameValue + $lensValue;

    $dateLabels[] = Carbon::parse($date)->format('M d');
    $inventoryValues[] = $totalValue;
}



    return view('admin.inventoryanalytics',[
        'summary' => [
            'totals' => [
                'drugs' => $totalDrugs,
                'frames' => $totalFrames,
                'lenses' => $totalLenses,
                'total' => $total,
            ],
            'values' => [
                'drugs' => $valueDrugs,
                'frames' => $valueFrames,
                'lenses' => $valueLenses,
                'total' => $totalValue,
            ],
            'lowStock' => [
                'drugs' => $lowStockDrugs,
                'frames' => $lowStockFrames,
                'lenses' => $lowStockLenses,
                'total' => $lowStockTotal,
            ],
        ],
        'tableData' => [
            'drugs' => Drug::all(),
            'frames' => Frame::all(),
            'lenses' => Lens::all(),
        ],
        'threshold' => $threshold,
         'chart' => [
            'labels' => $dateLabels,
            'data' => $inventoryValues,
        ],
         'labels' => $dateLabels,
         'data' => $inventoryValues,
    ]);
}


public function inventoryTwoAnalytics(){
    return view('admin.inventorytwoanalytics');
}


// public function invoiceAnalytics()
// {
//     return view('admin.invoiceanalytics');
// }



// use Illuminate\Support\Facades\DB;





// public function invoiceAnalytics()
// {
//     // Date 3 months ago
//     $threeMonthsAgo = Carbon::now()->subMonths(3)->startOfDay();

//     // Fetch invoices from the last 3 months
//     $invoices = Invo::where('created_at', '>=', $threeMonthsAgo)->get();

//     // Initialize variables
//     $totalRevenue = 0;
//     $totalProductsSold = 0;
//     $discountImpact = 0;
//     $productStats = [];

//     foreach ($invoices as $invoice) {
//         $names = $invoice->name;
//         $prices = $invoice->price;
//         $quantities = $invoice->qty;
//         $discount = $invoice->discount ?? 0;

//         $discountImpact += $discount;

//         // foreach ( $names as $index => $productName ) {
//         //     $quantity = $quantities[$index];
//         //     $price = $prices[$index];
//         //     $lineTotal = $quantity * $price;

//         //     // Accumulate revenue
//         //     $totalRevenue += $lineTotal;

//         //     // Accumulate product stats
//         //     if (!isset($productStats[$productName])) {
//         //         $productStats[$productName] = [
//         //             'quantity' => 0,
//         //             'revenue' => 0,
//         //         ];
//         //     }

//         //     $productStats[$productName]['quantity'] += $quantity;
//         //     $productStats[$productName]['revenue'] += $lineTotal;

//         //     // Accumulate total products sold
//         //     $totalProductsSold += $quantity;
//         // }


//       if (is_string($names)) {
//     $names = explode(',', $names);
// }
// if (is_string($quantities)) {
//     $quantities = explode(',', $quantities);
// }
// if (is_string($prices)) {
//     $prices = explode(',', $prices);
// }


//         foreach ($names as $index => $productName) {
//                 $quantity = $quantities[$index] ?? 0; // Prevent index errors
//                 $price = $prices[$index] ?? 0;

//     $lineTotal = $quantity * $price;

//     // Accumulate revenue
//     $totalRevenue += $lineTotal;

//     // Accumulate product stats
//     if (!isset($productStats[$productName])) {
//         $productStats[$productName] = [
//             'quantity' => 0,
//             'revenue' => 0,
//         ];
//     }

//     $productStats[$productName]['quantity'] += $quantity;
//     $productStats[$productName]['revenue'] += $lineTotal;

//     // Accumulate total products sold
//     $totalProductsSold += $quantity;
// }

//     }

//     // Count of total invoices
//     $totalInvoices = $invoices->count();

//     // Average invoice value
//     $averageInvoiceValue = $totalInvoices > 0 ? round($totalRevenue / $totalInvoices, 2) : 0;

//     // Convert stats array to collection
//     $productStatsCollection = collect($productStats);

//     // Top 5 products by quantity
//     $topProductsByQuantity = $productStatsCollection->sortByDesc('quantity')->take(5)->map(function ($item, $productName) use ($totalProductsSold) {
//         return [
//             'product_name' => $productName,
//             'total_quantity' => $item['quantity'],
//             'percentage' => $totalProductsSold > 0 ? round(($item['quantity'] / $totalProductsSold) * 100, 2) : 0,
//         ];
//     });

//     // Top 5 products by revenue
//     $topProductsByRevenue = $productStatsCollection->sortByDesc('revenue')->take(5)->map(function ($item, $productName) use ($totalRevenue) {
//         return [
//             'product_name' => $productName,
//             'product_revenue' => $item['revenue'],
//             'percentage' => $totalRevenue > 0 ? round(($item['revenue'] / $totalRevenue) * 100, 2) : 0,
//         ];
//     });


    

//     return view('admin.invoiceanalytics', [
//         'totalRevenue' => $totalRevenue,
//         'averageInvoiceValue' => $averageInvoiceValue,
//         'totalInvoices' => $totalInvoices,
//         'totalProductsSold' => $totalProductsSold,
//         'discountImpact' => $discountImpact,
//         'topProductsByQuantity' => $topProductsByQuantity,
//         'topProductsByRevenue' => $topProductsByRevenue,
//     ]);
// }

public function invoiceAnalytics()
{
    $threeMonthsAgo = Carbon::now()->subMonths(3)->startOfDay();
    $invoices = Invo::where('created_at', '>=', $threeMonthsAgo)->get();

    $totalRevenue = 0;
    $totalProductsSold = 0;
    $discountImpact = 0;
    $productStats = [];

    $dailyData = []; // For charting

    foreach ($invoices as $invoice) {
        $names = is_string($invoice->name) ? explode(',', $invoice->name) : $invoice->name;
        $quantities = is_string($invoice->qty) ? explode(',', $invoice->qty) : $invoice->qty;
        $prices = is_string($invoice->price) ? explode(',', $invoice->price) : $invoice->price;

        $discount = $invoice->discount ?? 0;
        $discountImpact += $discount;

        $invoiceDate = $invoice->created_at->format('Y-m-d');

        $dailyQty = 0;
        $dailyRevenue = 0;

        foreach ($names as $index => $productName) {
            $quantity = (int)($quantities[$index] ?? 0);
            $price = (float)($prices[$index] ?? 0);
            $lineTotal = $quantity * $price;

            // Track daily data
            $dailyQty += $quantity;
            $dailyRevenue += $lineTotal;

            $totalRevenue += $lineTotal;
            $totalProductsSold += $quantity;

            if (!isset($productStats[$productName])) {
                $productStats[$productName] = ['quantity' => 0, 'revenue' => 0];
            }

            $productStats[$productName]['quantity'] += $quantity;
            $productStats[$productName]['revenue'] += $lineTotal;
        }

        // Aggregate daily totals
        if (!isset($dailyData[$invoiceDate])) {
            $dailyData[$invoiceDate] = ['quantity' => 0, 'revenue' => 0];
        }

        $dailyData[$invoiceDate]['quantity'] += $dailyQty;
        $dailyData[$invoiceDate]['revenue'] += $dailyRevenue;
    }

    // Prepare for charts
    ksort($dailyData); // Sort by date

    $dates = array_keys($dailyData);
    $dailyQuantities = array_column($dailyData, 'quantity');
    $dailyRevenues = array_column($dailyData, 'revenue');

    $totalInvoices = $invoices->count();
    $averageInvoiceValue = $totalInvoices > 0 ? round($totalRevenue / $totalInvoices, 2) : 0;

    $productStatsCollection = collect($productStats);

    $topProductsByQuantity = $productStatsCollection->sortByDesc('quantity')->take(5)->map(function ($item, $productName) use ($totalProductsSold) {
        return [
            'product_name' => $productName,
            'total_quantity' => $item['quantity'],
            'percentage' => $totalProductsSold > 0 ? round(($item['quantity'] / $totalProductsSold) * 100, 2) : 0,
        ];
    });

    $topProductsByRevenue = $productStatsCollection->sortByDesc('revenue')->take(5)->map(function ($item, $productName) use ($totalRevenue) {
        return [
            'product_name' => $productName,
            'product_revenue' => $item['revenue'],
            'percentage' => $totalRevenue > 0 ? round(($item['revenue'] / $totalRevenue) * 100, 2) : 0,
        ];
    });

    return view('admin.invoiceanalytics', [
        'totalRevenue' => $totalRevenue,
        'averageInvoiceValue' => $averageInvoiceValue,
        'totalInvoices' => $totalInvoices,
        'totalProductsSold' => $totalProductsSold,
        'discountImpact' => $discountImpact,
        'topProductsByQuantity' => $topProductsByQuantity,
        'topProductsByRevenue' => $topProductsByRevenue,
        'dates' => $dates,
        'dailyQuantities' => $dailyQuantities,
        'dailyRevenues' => $dailyRevenues,
    ]);
}






    



}
