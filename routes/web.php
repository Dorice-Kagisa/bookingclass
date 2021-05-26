<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VenueController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
Route::get('/systemadmin', 'SystemadminController@index')->name('systemadmin')->middleware('systemadmin');
Route::get('/collegeadmin', 'Collegeadmin@index')->name('collegeadmin')->middleware('collegeadmin');
Route::get('/academicstaff', 'Academicstaff@index')->name('academicstaff')->middleware('academicstaff');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('venue', VenueController::class);


Route::get('/home', 'HomeController@index')->name('home');
