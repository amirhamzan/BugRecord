<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\BugController;
use App\Http\Controllers\BugController;

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

Route::get('/bugrecord', function () {
    return view('bugrecord');
});

Route::get('/main', function () {
    return view('main');
});

// Route::post('/main/create', [
//     'uses'=>'BugController@create',
//     'as'=>'bugs.create'
// ]);

//Route::post('/main/create', [BugController::class, 'create']);

//Route::post('/create', 'BugController@create')->name('bugs.create'); // no need auth to be able to post data to database

Route::post('/main/create', [App\Http\Controllers\BugController::class, 'create'])->name('bugs.create');

Route::get('/main', [App\Http\Controllers\BugController::class, 'show'])->name('bugs.show');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

