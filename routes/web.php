<?php

use Illuminate\Support\Facades\Route;



////////////////////////
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('landing');  // The landing page route
})->name('landing');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/documents/upload', [DocumentController::class, 'showUploadForm'])->name('documents.upload');  // Show the upload form
Route::post('/documents/upload', [DocumentController::class, 'uploadDocument'])->name('documents.store');  // Handle document upload

Route::get('/documents/compare', [DocumentController::class, 'showCompareForm'])->name('documents.compare.form');
Route::post('/documents/compare', [DocumentController::class, 'compareDocument'])->name('documents.compare.process');



Route::get('/documents', [DocumentController::class, 'index'])->name('documents.list');  // Show list of documents
Route::get('/documents/{id}', [DocumentController::class, 'show'])->name('documents.show');
Route::get('/documents/{id}/match', [DocumentController::class, 'match'])->name('documents.match');
Route::delete('documents/{id}', [DocumentController::class, 'destroy'])->name('documents.destroy');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/documents/upload', [DocumentController::class, 'showUploadForm'])->name('documents.upload');
    Route::post('/documents/upload', [DocumentController::class, 'uploadDocument'])->name('documents.store');
    // Add other routes that require authentication here
});



Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

