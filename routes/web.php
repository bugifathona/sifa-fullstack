<?php

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

Route::view('/', 'home');
Route::view('/playground', 'playground');
Route::view('/sysadmin/dashboard', 'domains.sysadmin.dashboard');
Route::view('/sysadmin/credential/user', 'domains.sysadmin.credential.user');
Route::view('/sysadmin/credential/role', 'domains.sysadmin.credential.role');
Route::view('/sysadmin/credential/permission', 'domains.sysadmin.credential.permission');
