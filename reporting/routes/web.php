<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

//// home route ///// 

Route::get('/', function () {
    return view('home');
});

////////////////////////

Auth::routes();


Route::middleware(['auth'])->group(function () { // is login
    Route::get('/islogin', [App\Http\Controllers\HomeController::class, 'islogin'])->name('islogin');
    Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

    // reports route
    Route::get('Report/create', [App\Http\Controllers\ReportsController::class,'create'])->name('raport.create');
    Route::get('Report/My Reports', [App\Http\Controllers\ReportsController::class,'veiw'])->name('raport.veiw');
    Route::post('Report/store', [App\Http\Controllers\ReportsController::class,'store'])->name('raport.store');
    Route::get('Report/index', [App\Http\Controllers\ReportsController::class,'index'])->name('dash.report');
    Route::get('Report/status/{id}', [App\Http\Controllers\ReportsController::class,'update_status'])->name('update_status');



    // annonce routes


Route::get('/annonces', [App\Http\Controllers\AnnonceController::class,'index'])->name('dash.annonces');
Route::get('/annonces/create', [App\Http\Controllers\AnnonceController::class,'create'])->name('dash.annonces.create');
Route::post('/annonces/store', [App\Http\Controllers\AnnonceController::class,'store'])->name('dash.annonces.store');

Route::get('/annonces/edit/{annonce_id}', [App\Http\Controllers\AnnonceController::class,'edit'])->name('dash.annonces.edit');
Route::post('/annonces/update/{annonce_id}', [App\Http\Controllers\AnnonceController::class,'update'])->name('dash.annonces.update');
Route::get('/annonces/delete/{annonce_id}', [App\Http\Controllers\AnnonceController::class,'destroy'])->name('dash.annonces.delete');
});

Route::get('news', [App\Http\Controllers\AnnonceController::class,'news'])->name('news');



// :::::::::::::::::




// :::::::::::::::::





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -----------------------------login-----------------------------------------
// Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
// Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

// // ------------------------------register---------------------------------------
// Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
// Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@storeUser')->name('register');

// -----------------------------forget password ------------------------------
Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');
