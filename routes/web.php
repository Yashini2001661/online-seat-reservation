<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttendanceController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/homeRoute', function () {
    return view('home');
});

Route::get('/loginRoute', function () {
    return view('login');
});


Route::get('/changepasswordRoute', function () {
    return view('changepassword');
});
Route::get('/viewattendenceRoute', function () {
    return view('viewattendence');
});


Route::get('/bookingRoute', function () {
    return view('booking');
});

Route::get('/adminRoute', function () {
    return view('admin');
});

Route::get('/adminpanelRoute', function () {
    return view('adminpanel');
});

Route::get('/userRoute', function () {
    return view('user');
});



Route::get('/admin', [AdminController::class, 'GotoAdminpanel']);
Route::get('/login', [AdminController::class, 'GotoAdminLogin'])->name("admin login route");
Route::get('/user', [UserController::class, 'GotoUserLogin'])->name("user login route");
Route::get('/printbookingdetailsRoute', [AttendanceController::class, 'downloadCSV'])->name('download.attendance.csv');

