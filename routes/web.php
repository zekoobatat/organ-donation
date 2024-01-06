<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DataAdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/directions', function () {
    return view('directions');
});

Route::get('/aboutadmin', function () {
    return view('aboutadmin');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/aboutdonate', function () {
    return view('aboutdonate');
});



Route::get('organ', [DataController::class,'show']);
Route::get('organadmin', [DataAdminController::class,'show']);
// Route::get('addorganadmin', [DataAdminController::class, 'edit'])->name('addorganadmin');
Route::resource('addorganadmin', DataAdminController::class);
Route::post('/addorganadmin', [DataAdminController::class, 'post'])->name('addorganadmin');
Route::delete('/deleteorgan/{organ}', [DataAdminController::class, 'delete'])->name('deleteorgan');

Route::get('organadmin/edit/{organ}', [DataAdminController::class, 'edit'])->name('organadminedit');
Route::post('/organadmin/update/{organ}', [DataAdminController::class, 'update'])->name('updateorganadmin');





Route::get('/addorgan', function () {
    return view('addorgan');
});

Route::get('/addorganadmin', function () {
    return view('addorganadmin');
});

Route::get('/observance', function () {
    return view('observance');
});

Route::post('/dataInsert', [OrganController::class, 'dataInsert']);
Route::post('/dataInsert', [OrganController::class, 'dataInsert'])->name('dataInsert');





Auth::routes();

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin', [HomeController::class, 'admin'])->name('admin');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
