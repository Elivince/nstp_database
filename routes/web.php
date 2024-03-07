<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrackerController;
use App\Http\Controllers\TrackerControllerforIncoming;
use App\Http\Controllers\TrackerControllerforOutgoing;

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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/tracker', [TrackerController::class, 'showtable'])->name('tracker');
Route::get('/incoming', [TrackerControllerforIncoming::class, 'showtable'])->name('incoming');
Route::get('/outgoing', [TrackerControllerforOutgoing::class, 'showtable'])->name('outgoing');
Route::get('/file-system', [TrackerController::class, 'showtable'])->name('file-system');



Route::post('/addRequest', [TrackerController::class, 'addRecordToTable']);

Route::get('/addRecord', function () {
    return view('addRecord');
});

Route::delete('/deleteRequest/{request}', [TrackerController::class, 'deleteRecordFromTable']);

require __DIR__ . '/auth.php';
