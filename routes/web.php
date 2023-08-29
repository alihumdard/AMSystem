<?php

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
    return view('quick-dashboard');
});

Route::get('/invoiceManage', function () {
    return view('invoice-management');
});

Route::get('/invoiceSelection', function () {
    return view('invoice-selection');
});

Route::get('/qouteManage', function () {
    return view('qoutes-management');
});

Route::get('/qouteSelection', function () {
    return view('qoutes-selection');
});

Route::get('/contractManage', function () {
    return view('contracts-management');
});

Route::get('/contractSelection', function () {
    return view('contracts-selection');
});

//users ...
Route::get('/editAccount', function () {
    return view('edit-account');
});

Route::get('/addAdmin', function () {
    return view('admins-management');
});

Route::get('/addUser', function () {
    return view('users-management');
});