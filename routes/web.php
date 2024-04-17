<?php

use App\Http\Controllers\AccessController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\frameController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoicegenerationController;
use App\Http\Controllers\lensController;
use App\Http\Controllers\messagingController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\publicRecordsController;
use App\Http\Controllers\RecieptController;
use App\Http\Controllers\RecordsController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\twilioSmsController;
use App\Http\Controllers\vitalsController;
use App\Models\register;
use App\Models\vital2;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/createpatient' , [PagesController::class, 'index'])->name('pages.register');
    Route::post('/createpatient/store', [PagesController::class, 'store'])->name('pages.store');
    Route::get('/createpatients/edit', [PagesController::class, 'edit'])->name('pages.edit');
    Route::put('/createpatients/{record}/edit', [PagesController::class, 'update'])->name('pages.update');
    Route::get('/createpatient/status', function(){ return view('pages.status'); })->name('pages.status');
    Route::delete('/createpatients/{record}/delete',[PagesController::class, 'destroy'])->name('pages.delete');
    Route::get('/doctor/signup', [DoctorsController::class, 'index'])->name('doctors.signup');
    Route::post('/doctor/signup/store', [DoctorsController::class, 'store'])->name('doctors.data');//signin
    Route::get('/doctors/signup/status', function () { return view('doctors.status'); })->name('doctors.status');
    Route::get('/doctor/signin', [DoctorsController:: class, 'signin'])->name('doctors.signin');
    Route::post('/doctors/check', [DoctorsController:: class, 'check'])->name('doctors.check');
    Route::get('/doctors/index', [DoctorsController::class, 'show'])->name('doctors.index');
    Route::get('doctors/vitals', [DoctorsController::class, 'vitals'])->name('doctors.vitals');
    Route::post('/doctors/vitals/post', [DoctorsController::class, 'vitalSave'])->name('vitals.post');//save data for vitals
    Route::get('doctors/treatment', [TreatmentController::class, 'index'])->name('doctors.treatment');
    Route::get('doctors/inventory', [InventoryController::class, 'index'])->name('doctors.inventory');
    Route::post('doctors/inventory/store', [InventoryController::class, 'store'])->name('inventory.store');
    Route::get('/doctors/invoice', [InvoiceController::class, 'index'])->name('doctors.invoice');
    Route::get('/doctors/inventory/search', [InventoryController::class, 'search'])->name('inventory.search'); //focus
    Route::get('/doctors/inventory/find', [InventoryController::class, 'find'])->name('inventory.find');// focus 2
    // Route::post('/doctors/invoice/save', [InvoiceController::class, 'save'])->name('invoice.save');//saves to the invoice table
    Route::get('/doctors/reciept', [RecieptController::class,'index'])->name('doctors.reciept');
    Route::get('/testing', function (){ return view('doctors.testing');})->name('testing');
    Route::get('/inventory/store', [InventoryController::class, 'list'])->name('inventory.list');// display the list of all inventory
    Route::delete('/inventory/{item}/delete', [InventoryController::class, 'delete'])->name('inventory.delete');
    Route::get('/devmode', function (){ return view('devmode');});
    Route::get('/doctors/drug', [DrugController::class, 'index'])->name('doctors.drugs');//to store drugs
    Route::post('/doctors/drug/store', [DrugController::class, 'store'])->name('doctors.store');//duplicate
    Route::get('/doctors/drug/list', [DrugController::class, 'list'])->name('doctors.list');
    Route::get('/doctors/{drugs}/edit,',[DrugController::class, 'edit'])->name('drugs.edit');
    Route::put('/doctors/{drugs}/update', [DrugController::class, 'update'])->name('doctors.update');
    Route::delete('/doctors/{drugs}/destroy', [DrugController::class, 'destroy'])->name('doctors.delete');
    Route::get('/invoice', [InvoicegenerationController::class, 'index'])->name('invoice.show'); // invoice package
    Route::get('/invoice/generate', [InvoiceController::class, 'show'])->name('generate.show'); // capturing data for invoice generation
    Route::post('/doctors/invoice/save', [InvoiceController::class, 'save'])->name('invoice.save');//saves to the invoice table
    Route::get('/booking', [messagingController::class, 'index'])->name('booking');//displays the page for booking
    Route::post('/booking/status', [messagingController::class, 'store'])->name('booking.store');//stores booking data for users
    Route::get('/sendsms', [twilioSmsController::class, 'test'])->name('sms'); //route to test twilio manually
    Route::get('/records', [RecordsController::class, 'index'])->name('public.records');// public patients record
    Route::get('/records/search', [RecordsController::class, 'search'])->name('records.search');
    Route::get('/frames', [frameController::class, 'index'])->name('frame');// frames page
    Route::post('/frame/store', [frameController::class, 'store'])->name('frame.store');//store frames
    Route::get('/frame/list', [frameController::class, 'list'])->name('frame.list');// LIST OUT ALL FRAMES
    Route::get('/frames/{frames}/edit', [frameController::class, 'edit'])->name('frame.edit');//display frames edit and pass data
    Route::put('/frames/{frames}/update', [frameController::class, 'update'])->name('frame.update');//UPDATES THE FRAME LIST DATA
    Route::delete('/frames/{frames}/delete', [frameController::class, 'delete'])->name('frame.delete');
    Route::get('/lens', [lensController::class, 'index'])->name('lens');
    Route::post('/lens/store', [lensController::class, 'store'])->name('lens.store');
    Route::get('/lens/list', [lensController::class, 'list'])->name('lens.list');
    Route::get('/lens/{len}/edit', [lensController::class, 'edit'])->name('lens.edit');
    Route::put('/lens/{lens}/update', [lensController::class, 'update'])->name('lens.update');
    Route::delete('/lens/{len}/delete', [lensController::class, 'delete'])->name('lens.delete');
    Route::get('/smspage/{sms}', [SmsController::class, 'pass'])->name('sms.page');//sms handler
    Route::get('/sms', [SmsController::class, 'index'])->name('doctor.sms');
    Route::get('/invoice/find', [InvoiceController::class, 'find'])->name('invoice.find');//invoice searcher
    Route::get('/invoice/search', [InvoiceController::class, 'search'])->name('invoice.search');
    Route::post('/doctors/treatment/store', [TreatmentController::class, 'store'])->name('treatment.store');//stores data for the treatment plan
    Route::post('/doctors/vitals/store', [vitalsController::class, 'store'])->name('vitals.store');//store data for vitals
    Route::get('/search/treatment', [vitalsController:: class, 'show'])->name('search.treatment');
    Route::get('/search/treatment/get', [vitalsController::class, 'search'])->name('search.get');
    Route::get('/search/vitals', [vitalsController::class, 'display'])->name('search.vitals');
    Route::get('/search/vitals/get', [vitalsController::class, 'vitals'])->name('vitals.get');
    Route::get('/register', [registerController:: class, 'index'])->name('register');
    Route::post('/register/data', [registerController::class, 'store'])->name('register.data');
    Route::get('/register/signin', [registerController::class, 'signin'])->name('register.signin');
    Route::post('/register/data/check', [registerController::class, 'check'])->name('register.check');
});
// require __DIR__.'/auth.php';

// // Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
