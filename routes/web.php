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

Route::get('/register', function () {
    $roles = \App\Models\Auth\Role::all();
    return view('auth.register',compact('roles'));

})->name('register');
\Illuminate\Support\Facades\Auth::routes();
Route::get('/systemadmin', 'SystemadminController@index')->name('systemadmin')->middleware('systemadmin');
Route::get('/collegeadmin', 'Collegeadmin@index')->name('collegeadmin')->middleware('collegeadmin');
Route::get('/academicstaff', 'Academicstaff@index')->name('academicstaff')->middleware('academicstaff');
//Route::get('/dashboard', 'DashboardController@index')->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', function () {
    $user = \Illuminate\Support\Facades\Auth::user();
    return view('dashboard')
        ->with('user',$user);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/Web/venue/venue.php';

Route::get('/home', 'HomeController@index')->name('home');

