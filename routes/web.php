<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrackerController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// SERIAL NO. REQUEST TRACKER ROUTES//
// Show Table
Route::get('/tracker', [TrackerController::class, 'showtable']);

// Add Function
Route::get('/viewAddRequest', [TrackerController::class, 'showAddRequestPage']);
Route::post('/addRequest', [TrackerController::class, 'addRecordToTable']);

// Edit Function
Route::get('/viewEditRequest/{request}', [TrackerController::class, 'showEditRequestPage']);
Route::put('/viewEditRequest/{request}', [TrackerController::class, 'editRecordFromTable']);

// Delete Function
Route::delete('/deleteRequest/{request}', [TrackerController::class, 'deleteRecordFromTable']);

require __DIR__.'/auth.php';
