<?php

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
Route::get('/mypage', function() {
    return view('tweet.mypage');
});
Route::get('/create', function() {
    return view('tweet.create');
});
Route::get('/timeline', function() {
    return view('tweet.timeline');
});
Route::get('/mypage', \App\Http\Controllers\Tweet\MypageController::class)
->name('tweet.mypage');
Route::post('/create', \App\Http\Controllers\Tweet\CreateController::class)
->middleware('auth')
->name('tweet.create');
Route::delete('/delete/{tweetId}', \App\Http\Controllers\Tweet\DeleteController::class)
->name('tweet.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
