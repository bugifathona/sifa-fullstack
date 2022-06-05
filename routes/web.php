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

Route::view('/', 'home')->name("#");
Route::view('/playground', 'playground');

Route::resource('sysadmin/credential/users', App\Http\Controllers\UserController::class, ['as' => 'sysadmin.credential']);
Route::resource('sysadmin/credential/roles', App\Http\Controllers\RoleController::class, ['as' => 'sysadmin.credential']);
Route::resource('sysadmin/credential/permissions', App\Http\Controllers\PermissionController::class, ['as' => 'sysadmin.credential']);
Route::resource('sysadmin/reference/branches', App\Http\Controllers\RefBranchController::class, ['as' => 'sysadmin.reference']);
Route::put('sysadmin/reference/branches/{id}/toggle-active', 'App\Http\Controllers\RefBranchController@toggleActive')->name('sysadmin.reference.branches.toggle-active');
Route::resource('sysadmin/reference/education-levels', App\Http\Controllers\RefEducationLevelController::class, ['as' => 'sysadmin.reference']);
Route::resource('sysadmin/reference/class-grades', App\Http\Controllers\RefClassGradeController::class, ['as' => 'sysadmin.reference']);
Route::view('/sysadmin/dashboard', 'domains.sysadmin.dashboard')->name('sysadmin.dashboard');
