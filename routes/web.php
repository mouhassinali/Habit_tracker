<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HabitsController;
use App\Http\Controllers\Teams\TeamInvitationController;
use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function(){
    return view('index');
})->name('index');

Route::get('/inscription', function(){
    return view('auth.inscription');
})->name('inscription');

Route::get('/connexion', function(){
    return view('auth.connexion');
})->name('connexion');

Route::post('/inscription', [AuthController::class, 'store'])->name('inscription.store');

Route::get('/user/index', [DashboardController::class, 'index'])->name('user.index')->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/connexion', [AuthController::class, 'login'])->name('login');

Route::get('/user/habits', [DashboardController::class, 'habits'])->name('user.habits')->middleware('auth');

Route::get('/user/habits/add-habit',[HabitsController::class, 'index'])->name('add-habits.index');

Route::post('/user/habits/add-habit', [HabitsController::class, 'store'])->name('add-habits.store');

Route::get('user/habits/edit-habit/{id}', [HabitsController::class, 'edit'])->name('edit-habit');

Route::put('user/habits/edit-habit/{id}', [HabitsController::class, 'update'])->name('update-habit');

Route::delete('user/habits/delete-habit/{id}', [HabitsController::class, 'destroy'])->name('delete-habit'); 
