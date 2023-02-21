<?php

use App\Http\Controllers\BizController;
use App\Http\Controllers\NotificationController;
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

Route::get('/', [BizController::class, 'getLatest']);
Route::get('/admin/login', [App\Http\Controllers\HomeController::class, 'adminLogin'])->name('adminlogin');
Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('/admin/pendingbizs', [App\Http\Controllers\HomeController::class, 'pendingBizLists'])->name('pendingBiz');
Route::get('/admin/acceptedbizs', [App\Http\Controllers\HomeController::class, 'acceptedBizLists'])->name('acceptedBiz');
Route::post('/admin/publishbizs/{id}', [App\Http\Controllers\HomeController::class, 'publishBiz'])->name('biz.published');
Route::get('/pricing', [App\Http\Controllers\HomeController::class, 'pricing'])->name('pricing');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'seller'], function () {
    Route::group(['prefix' => 'seller'], function () {
        Route::get('/dashboard', [\App\Http\Controllers\SellerController::class, 'dashboard'])->name('seller.dashboard');
    });

    Route::group(['prefix' => 'bizs'], function () {
        Route::get('/create', [BizController::class, 'create'])->name('biz.create');
        Route::post('/create', [BizController::class, 'store'])->name('biz.store');
        Route::put('/update/{biz}', [BizController::class, 'update'])->name('biz.update');
        Route::get('/edit/{biz}', [BizController::class, 'edit'])->name('biz.edit');
        Route::delete('/delete/{id}', [BizController::class, 'delete'])->name('biz.delete');
    });
    Route::post('/accept/{proposal}/{biz_id}', [ProposalController::class, 'acceptBiz'])->name('proposal.biz.accept');
    Route::post('/decline/{proposal}/{biz_id}', [ProposalController::class, 'declineBiz'])->name('proposal.biz.decline');
});

Route::group(['middleware' => 'buyer'], function () {
    Route::group(['prefix' => 'buyer'], function () {
        Route::get('/dashboard', [\App\Http\Controllers\BuyerController::class, 'dashboard'])->name('buyer.dashboard');
    });

    Route::group(['prefix' => 'proposals'], function () {
        Route::get('/create', [ProposalController::class, 'create'])->name('proposal.create');
        Route::post('/create', [ProposalController::class, 'store'])->name('proposal.store');
        Route::get('/', [ProposalController::class, 'index'])->name('proposal.index');

        Route::post('/upload-to-biz', [ProposalController::class, 'uploadProposalToBiz'])->name('proposal.biz.upload');
    });
});

Route::get('/proposals/show/{proposal}', [ProposalController::class, 'edit'])->name('proposal.edit');

Route::get('/proposals/{proposal}', [ProposalController::class, 'show'])->name('proposal.show');
Route::get('/proposals/{proposal}/{biz_id}', [ProposalController::class, 'show'])->name('notification.proposal.show');

Route::get('/bizs', [BizController::class, 'index'])->name('biz.index');
Route::get('/bizs/{biz}', [BizController::class, 'show'])->name('biz.show');
Route::get('/bizs-by-user', [BizController::class, 'getBizByUser']); // get biz lists by users
Route::get('/latest-bizs', [BizController::class, 'getLatest']); // get latest biz lists
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index'); // get notification list


// just testing
