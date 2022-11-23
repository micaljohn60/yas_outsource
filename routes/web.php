<?php

use App\Http\Controllers\BizController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'seller','prefix' => 'bizs'] , function () {
    Route::get('/create', [BizController::class, 'create'])->name('biz.create');
    Route::post('/create', [BizController::class, 'store'])->name('biz.store');
    Route::get('/', [BizController::class, 'index'])->name('biz.index');
});

Route::group(['middleware' => 'buyer','prefix' => 'proposals'] , function () {
    Route::get('/create', [\App\Http\Controllers\ProposalController::class, 'create'])->name('proposal.create');
    Route::post('/create', [\App\Http\Controllers\ProposalController::class, 'store'])->name('proposal.store');
    Route::get('/', [\App\Http\Controllers\ProposalController::class, 'index'])->name('proposal.index');
    Route::get('/{proposal}', [\App\Http\Controllers\ProposalController::class, 'show'])->name('proposal.show');
});


Route::get('/bizs/{biz}', [\App\Http\Controllers\BizController::class, 'show'])->name('biz.show');
