<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;


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
Route::get('/category/all', [CategoryController::class, 'allCat'])->name('all.category');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        
        //$users = User::all();
        $users = DB::table('users')->get();
        return view('dashboard', compact("users"));
    })->name('dashboard');
});
