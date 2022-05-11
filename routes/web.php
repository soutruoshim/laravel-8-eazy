<?php

use App\Http\Controllers\ContactController;
use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function(){
    echo "This is Homepage";
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact-9023848', [ContactController::class, 'index'])->name('con');