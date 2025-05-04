<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('isAuthenticated')->group(function () {
    
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    Route::get('/menu',function(){
        return view('menu');
    })->name('menu');

    Route::get('/about',function(){
        return view('about');
    })->name('about');

    Route::get('/service',function(){
        return view('service');
    })->name('service');

    Route::get('/contact',function(){
        return view('contact');
    })->name('contact');

    Route::get('/edit_profile',function(){
        return view('edit');
    })->name('edit_profile');
    Route::get('/booking',function(){
        return view('booking');
    })->name('booking');

    Route::get('/edit_profile',function(){
        return view('edit');
    })->name('edit_profile');

    Route::post('/editinfo',[HomeController::class,'editinfo'])->name('editinfo');
    Route::post('/updatepwd',[HomeController::class,'updatePassword'])->name('updatePassword');
    Route::get('/dashboard/contacts',[ContactController::class,'showContact'])->name('contactAdmin')->middleware('admin');
    Route::get('/dashboard/users',[AdminController::class,'ShowUsers'])->name('userAdmin')->middleware('admin');
    Route::post('/dashboard/contact/delete/{id}',[ContactController::class,'destroy'])->name('DeleteContactAdmin')->middleware('admin');
    Route::post('/dashboard/users/delete/{id}',[AdminController::class,'destroy'])->name('DeleteUserAdmin')->middleware('admin');
    Route::put('/dashboard/users/role/{id}',[AdminController::class,'role'])->name('roleUser')->middleware('admin');

    // Auth::routes();

    Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('admin');

    Route::fallback(function () {
        return view('notfound');
    });

    Route::post('/contact', [ContactController::class, 'store']);

});