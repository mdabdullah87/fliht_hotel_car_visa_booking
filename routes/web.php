<?php

use App\Http\Controllers\car\carcontroller;
use App\Http\Controllers\fliht\flihtcontroller;
use App\Http\Controllers\hotel\hotelcontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\visa\visacontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//My Routes//

Route::prefix('/dashboard/fliht')->name('fliht.')->group(function(){

      Route::get('add',[flihtcontroller::class,'add'])->name('add');
      Route::get('all',[flihtcontroller::class,'all'])->name('all');

});

Route::prefix('/dashboard/hotel')->name('hotel.')->group(function(){

    Route::get('add',[hotelcontroller::class,'add'])->name('add');
    Route::get('all',[hotelcontroller::class,'all'])->name('all');


});

Route::prefix('/dashboard/car')->name('car.')->group(function(){

    Route::get('add',[carcontroller::class,'add'])->name('add');
    Route::get('all',[carcontroller::class,'all'])->name('all');


});

Route::prefix('/dashboard/visa')->name('visa.')->group(function(){

    Route::get('add',[visacontroller::class,'add'])->name('add');
    Route::get('all',[visacontroller::class,'all'])->name('all');


});

//End My Route//


Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





