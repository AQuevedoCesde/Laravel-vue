<?php

use App\Http\Controllers\NoteController;
use Inertia\Inertia;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\PageController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;



Route::view('/', 'Index');

Route::get('dashboard',[PageController::class,'dashboard'])
    ->middleware('auth:sanctum')
    ->name('dashboard');

Route::resource('notes', NoteController::class)
->middleware('auth:sanctum');
