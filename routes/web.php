<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
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
Route::view('/',"search.video")->name('video');
//Route::view('/videos',"search.video");
Route::view('/channels',"search.channel")->name("channel");
Route::view('/playlist',"search.playlist")->name("playlist");
Route::view('/faq',"search.channel")->name("faq");
Route::get('search',[VideoController::class,'index'])->name('search.index');
Route::get('/videos/{video}',[VideoController::class,'show'])->name('videos.show');
