<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/log_in', function () {
    return view('log_in');
});

Route::get('/admin_login', function () {
    return view('admin_login');
});

Route::get('/sup', function () {
    return view('sup');
});



Route::get('/comment', function () {
    return view('comment');
});


Route::get('/mm',[HomeController::class,'mm']);


Route::post('/upload',[HomeController::class,'upload']);
// Route::get('/display',[HomeController::class,'view']);
Route::post('/upload_2',[HomeController::class,'upload_2']);



Route::post('/addp',[HomeController::class,'addp']);
Route::post('/log_in',[HomeController::class,'log_in']);

Route::post('/add_comment',[HomeController::class,'add_comment'])->middleware('isLoggedIn');


Route::put('/update',[HomeController::class,'update']);

Route::put('/update_p',[HomeController::class,'update_p'])->middleware('isLoggedIn_admin');


Route::post('/log_in_admin',[HomeController::class,'log_in_admin']);

Route::get('/display',[HomeController::class,'display'])->middleware('isLoggedIn');
Route::get('/log_out',[HomeController::class,'log_out']);

Route::get('/log_out_admin',[HomeController::class,'log_out_admin']);

Route::get('/ok',[HomeController::class,'ok'])->middleware('isLoggedIn_admin');

Route::get('/p_delete/{id}',[HomeController::class,'p_delete']);

Route::get('/b_f_c/{id}',[HomeController::class,'b_f_c']);

Route::get('/u_delete/{id}',[HomeController::class,'u_delete']);

Route::get('/ok_2',[HomeController::class,'ok_2']);
Route::get('/ok_3/{id}',[HomeController::class,'ok_3']);

Route::get('/comment/{id}',[HomeController::class,'comment']);

Route::get('/c_ad/{id}',[HomeController::class,'c_ad']);

Route::get('/pub_c/{id}',[HomeController::class,'pub_c']);


Route::get('/cart_delete/{id}',[HomeController::class,'cart_delete']);

Route::get('/c_p/{id}',[HomeController::class,'c_p']);


Route::get('/delivery/{id}',[HomeController::class,'delivery']);

Route::get('/p_update/{id}',[HomeController::class,'p_update'])->middleware('isLoggedIn_admin');
Route::get('/cart/{id}',[HomeController::class,'cart'])->middleware('isLoggedIn');

Route::get('/pay/{id}',[HomeController::class,'pay'])->middleware('isLoggedIn');

Route::get('/cod/{id}',[HomeController::class,'cod'])->middleware('isLoggedIn');

Route::post('/buy',[HomeController::class,'buy']);

Route::put('/pwd',[HomeController::class,'pwd']);


Route::get('/sum',[HomeController::class,'sum']);

Route::get('/add_p', function () {
    return view('add_p');
})->middleware('isLoggedIn_admin');