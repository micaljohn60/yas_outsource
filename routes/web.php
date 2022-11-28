<?php

use App\Http\Controllers\BizController;
use App\Http\Controllers\ProposalController;
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


Route::group(['middleware' => 'seller', 'prefix' => 'bizs'], function () {
    Route::get('/create', [BizController::class, 'create'])->name('biz.create');
    Route::post('/create', [BizController::class, 'store'])->name('biz.store');
    Route::get('/', [BizController::class, 'index'])->name('biz.index');
});

Route::group(['middleware' => 'buyer'], function () {

    Route::group(['prefix' => 'proposals'], function () {
        Route::post('/create', [ProposalController::class, 'store'])->name('proposal.store');
        Route::get('/', [ProposalController::class, 'index'])->name('proposal.index');
        Route::get('/{proposal}', [ProposalController::class, 'show'])->name('proposal.show');

        Route::post('/upload-to-biz', [ProposalController::class, 'uploadProposalToBiz'])->name('proposal.biz.upload');
    });


});


Route::get('/bizs/{biz}', [BizController::class, 'show'])->name('biz.show');
Route::get('/bizs-by-user', [BizController::class, 'getBizByUser']); // get biz lists by users
Route::get('/latest-bizs', [BizController::class, 'getLatest']); // get latest biz lists
