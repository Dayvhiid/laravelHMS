<?php

use App\Http\Controllers\AccessController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoicegenerationController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecieptController;
use App\Http\Controllers\TreatmentController;
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
    Route::post('/doctor/signup/store', [DoctorsController::class, 'store'])->name('doctors.store');
    Route::get('/doctors/signup/status', function () { return view('doctors.status'); })->name('doctors.status');
    Route::get('/doctor/signin', [DoctorsController:: class, 'signin'])->name('doctors.signin');
    Route::post('/doctors/check', [DoctorsController:: class, 'check'])->name('doctors.check');
    Route::get('/doctors/index', [DoctorsController::class, 'show'])->name('doctors.index');
    Route::get('doctors/vitals', [DoctorsController::class, 'vitals'])->name('doctors.vitals');
    Route::get('doctors/treatment', [TreatmentController::class, 'index'])->name('doctors.treatment');
    Route::get('doctors/inventory', [InventoryController::class, 'index'])->name('doctors.inventory');
    Route::post('doctors/inventory/store', [InventoryController::class, 'store'])->name('inventory.store');
    Route::get('/doctors/invoice', [InvoiceController::class, 'index'])->name('doctors.invoice');
    Route::get('/doctors/inventory/search', [InventoryController::class, 'search'])->name('inventory.search'); //focus
    Route::get('/doctors/inventory/find', [InventoryController::class, 'find'])->name('inventory.find');// focus 2
    // Route::post('/doctors/invoice/save', [InvoiceController::class, 'save'])->name('invoice.save');//saves to the invoice table
    Route::get('/doctors/reciept', [RecieptController::class,'index'])->name('doctors.reciept');
    Route::get('/testing', function (){ return view('doctors.testing');});//invoice
    Route::get('/devmode', function (){ return view('devmode');});
    Route::get('/doctors/drug', [DrugController::class, 'index'])->name('doctors.drugs');
    Route::post('/doctors/drug/store', [DrugController::class, 'store'])->name('doctors.store');
    Route::get('/doctors/drug/list', [DrugController::class, 'list'])->name('doctors.list');
    Route::get('/doctors/{drugs}/edit,',[DrugController::class, 'edit'])->name('drugs.edit');
    Route::put('/doctors/{drugs}/update', [DrugController::class, 'update'])->name('doctors.update');
    Route::delete('/doctors/{drugs}/destroy', [DrugController::class, 'destroy'])->name('doctors.delete');
    Route::get('/invoice', [InvoicegenerationController::class, 'index'])->name('invoice.show'); // invoice package
    Route::get('/invoice/generate', [InvoiceController::class, 'show'])->name('generate.show'); // capturing data for invoice generation
    Route::post('/doctors/invoice/save', [InvoiceController::class, 'save'])->name('invoice.save');//saves to the invoice table
});
require __DIR__.'/auth.php';

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
