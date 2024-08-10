<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\RecieptController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FrameController;
use App\Http\Controllers\LensController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\MessagingController;
use App\Http\Controllers\TwilioSmsController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\InvoicegenerationController;
use App\Http\Controllers\VitalsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin2Controller;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\SendSMSController;
use App\Http\Controllers\NewDoctorVerificationController;
use App\Http\Controllers\NewValidationController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\ImageUpload;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WebrtcStreamingController;

Route::get('/', function () {
    return view('landingpage');
})->name('home');

// Public routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register/data', [RegisterController::class, 'store'])->name('register.data');
Route::get('/register/signin', [RegisterController::class, 'signin'])->name('register.signin');
Route::post('/register/data/check', [RegisterController::class, 'check'])->name('register.check');
Route::get('/doctor/signup', [DoctorsController::class, 'index'])->name('doctors.signup');
Route::post('/doctor/signup/store', [DoctorsController::class, 'store'])->name('doctors.data');
Route::get('/doctor/signin', [DoctorsController::class, 'signin'])->name('doctors.signin');
Route::post('/doctors/check', [DoctorsController::class, 'check'])->name('doctors.check');
Route::get('/holding', function () { return view('holding'); });
Route::get('/devmode', function (){ return view('landingpage');})->name('devmode');

// Protected Routes
// Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/createpatient', [PagesController::class, 'index'])->name('pages.register');
    Route::post('/createpatient/store', [PagesController::class, 'store'])->name('pages.store');
    Route::get('/createpatients/edit', [PagesController::class, 'edit'])->name('pages.edit');
    Route::put('/createpatients/{record}/edit', [PagesController::class, 'update'])->name('pages.update');
    Route::get('/createpatient/status', function(){ return view('pages.status'); })->name('pages.status');
    Route::delete('/createpatients/{record}/delete',[PagesController::class, 'destroy'])->name('pages.delete');

    Route::get('/doctors/index', [DoctorsController::class, 'show'])->name('doctors.index');
    Route::get('doctors/vitals', [DoctorsController::class, 'vitals'])->name('doctors.vitals');
    Route::post('/doctors/vitals/post', [DoctorsController::class, 'vitalSave'])->name('vitals.post');
    Route::get('doctors/treatment', [TreatmentController::class, 'index'])->name('doctors.treatment');
    Route::get('doctors/inventory', [InventoryController::class, 'index'])->name('doctors.inventory');
    Route::post('doctors/inventory/store', [InventoryController::class, 'store'])->name('inventory.store');
    Route::get('/doctors/invoice', [InvoiceController::class, 'index'])->name('doctors.invoice');
    Route::get('/doctors/inventory/search', [InventoryController::class, 'search'])->name('inventory.search');
    Route::get('/doctors/inventory/find', [InventoryController::class, 'find'])->name('inventory.find');
    Route::get('/doctors/reciept', [RecieptController::class,'index'])->name('doctors.reciept');

    Route::get('/inventory/store', [InventoryController::class, 'list'])->name('inventory.list');
    Route::delete('/inventory/{item}/delete', [InventoryController::class, 'delete'])->name('inventory.delete');
    //Drug Routes
    Route::get('/doctors/drug', [DrugController::class, 'index'])->name('doctors.drugs');
    Route::post('/doctors/drug/store', [DrugController::class, 'store'])->name('doctors.store');
    Route::get('/doctors/drug/list', [DrugController::class, 'list'])->name('doctors.list');
    Route::get('/doctors/{drugs}/edit', [DrugController::class, 'edit'])->name('drugs.edit');
    Route::put('/doctors/{drugs}/update', [DrugController::class, 'update'])->name('doctors.update');
    Route::delete('/doctors/{drugs}/destroy', [DrugController::class, 'destroy'])->name('doctors.delete');
    //Invoice Routes
    Route::get('/invoice', [InvoicegenerationController::class, 'index'])->name('invoice.show');
    Route::get('/invoice/generate', [InvoiceController::class, 'show'])->name('generate.show');
    Route::post('/doctors/invoice/save', [InvoiceController::class, 'save'])->name('invoice.save');

    Route::get('/booking', [MessagingController::class, 'index'])->name('booking');
    Route::post('/booking/status', [MessagingController::class, 'store'])->name('booking.store');

    Route::get('/sendsms', [TwilioSmsController::class, 'test'])->name('sms');

    Route::get('/records', [RecordsController::class, 'index'])->name('public.records');
    Route::get('/records/search', [RecordsController::class, 'search'])->name('records.search');

    Route::get('/frames', [FrameController::class, 'index'])->name('frame');
    Route::post('/frame/store', [FrameController::class, 'store'])->name('frame.store');
    Route::get('/frame/list', [FrameController::class, 'list'])->name('frame.list');
    Route::get('/frames/{frames}/edit', [FrameController::class, 'edit'])->name('frame.edit');
    Route::put('/frames/{frames}/update', [FrameController::class, 'update'])->name('frame.update');
    Route::delete('/frames/{frames}/delete', [FrameController::class, 'delete'])->name('frame.delete');

    Route::get('/lens', [LensController::class, 'index'])->name('lens');
    Route::post('/lens/store', [LensController::class, 'store'])->name('lens.store');
    Route::get('/lens/list', [LensController::class, 'list'])->name('lens.list');
    Route::get('/lens/{len}/edit', [LensController::class, 'edit'])->name('lens.edit');
    Route::put('/lens/{lens}/update', [LensController::class, 'update'])->name('lens.update');
    Route::delete('/lens/{len}/delete', [LensController::class, 'delete'])->name('lens.delete');


    
    Route::get('/smspage/{sms}', [SmsController::class, 'pass'])->name('sms.page');
    Route::get('/sms', [SmsController::class, 'index'])->name('doctor.sms');

    Route::get('/invoice/find', [InvoiceController::class, 'find'])->name('invoice.find');
    Route::get('/invoice/search', [InvoiceController::class, 'search'])->name('invoice.search');
    Route::post('/doctors/treatment/store', [TreatmentController::class, 'store'])->name('treatment.store');
    Route::post('/doctors/vitals/store', [VitalsController::class, 'store'])->name('vitals.store');
    Route::get('/search/treatment', [VitalsController:: class, 'show'])->name('search.treatment');
    Route::get('/search/treatment/get', [VitalsController::class, 'search'])->name('search.get');
    Route::get('/search/vitals', [VitalsController::class, 'display'])->name('search.vitals');
    Route::get('/search/vitals/get', [VitalsController::class, 'vitals'])->name('vitals.get');

    Route::get('/signup', [NewValidationController::class, 'signup'])->name('NewSignUp');
    Route::get('/Bookings', [NewValidationController::class, 'booking'])->name('NewBooking');
    Route::get('/doctors/signup/imp', [NewDoctorVerificationController:: class, 'index'])->name('doctorSignIn');
    Route::get('/send-sms/{sms}', [SendSMSController::class, 'loadPage'])->name('newSMS');
    Route::get('/send-sms', [SendSMSController:: class, 'sendSMS'])->name('sendSMS');
    Route::get('/sms-api', [SmsController::class, 'NaijaSMS'])->name('NaijaSMS');

    Route::get('/landing-page', function () {return view('landing-page2');} );

    // Admin routes
    Route::get('/admin2', [AdminController::class, 'index'])->name('admin.admin2');
    Route::get('/admin/drug', [AdminController::class, 'drugsIndex'])->name('admin2.drugs');
    Route::get('/admin/drug/list', [AdminController::class, 'drugList'])->name('admin2.druglist');
    Route::get('/admin/inventory/store', [AdminController::class, 'inventoryIndex'])->name('admin2.inventory');
    Route::get('/admin/frame', [AdminController::class, 'frameIndex'])->name('admin2.frame');
    Route::get('/admin/framelist', [AdminController::class, 'framelist'])->name('admin2.framelist');
    Route::get('/admin2/lens', [AdminController::class, 'lensIndex'])->name('admin2.lens');
    Route::get('/admin/lenslist', [AdminController::class, 'lenslist'])->name('admin2.lenslist');

    // Admin 1 routes
    Route::get('/admin1/index', [Admin2Controller::class, 'index'])->name('admin1.index');
    Route::post('admin1/password', [Admin2Controller::class, 'password'])->name('admin1.password');
    Route::post('admin1/check', [Admin2Controller::class, 'check'])->name('admin1.check');

    //testing
    Route::get('/admin-entry', function (){ return view('doctors.testing');})->name('testing');

    //status
    Route::get('/doctors/signup/status', function () { return view('doctors.status'); })->name('doctors.status');
    //Full calender
    Route::get('full-calender', [FullCalenderController::class, 'index'])->name('calender');
    Route::post('full-calender/action', [FullCalenderController::class, 'action']);
    //Payment
    Route::get('payment-index', [PaymentController::class, 'index'])->name('payment');

    // web video
    Route::get('/client', function () {
        return view('video.index');
    })->name('video');
    
    Route::get('/client/confo/{room}/{type}/{ref}',  "EnxRtc\RoomController@confo");

    //Image Uplaod
    Route::get('/patients/image-upload', [ImageUpload::class, 'index'])->name('image.upload');
    Route::post('images/upload', [ImageUpload::class, 'store'])->name('images.store');


    Route::get('images', [ImageUpload::class, 'display'])->name('images.index');

    Route::get('images/search', [ImageUpload::class, 'search'])->name('images.search');
    Route::post('images/search', [ImageUpload::class, 'searchResult'])->name('images.search.result');



// });

// // Example of protecting some routes with both 'auth' and 'verified' middleware
// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// // Example of a public route that does not require authentication
// Route::get('/public', function () {
//     return 'This is a public page';
// })->name('public');
