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

Route::resource('sysadmin/credential/users', App\Http\Controllers\Sysadmin\Credential\UserController::class, ['as' => 'sysadmin.credential']);
Route::resource('sysadmin/credential/roles', App\Http\Controllers\Sysadmin\Credential\RoleController::class, ['as' => 'sysadmin.credential']);
Route::resource('sysadmin/credential/permissions', App\Http\Controllers\Sysadmin\Credential\PermissionController::class, ['as' => 'sysadmin.credential']);

// Route::controller(UserController::class)->group(function() {
//     Route::get('/sysadmin/credential/users', 'index')->name('sysadmin.credential.users.index');
//     Route::get('/sysadmin/credential/users/create', 'create')->name('sysadmin.credential.users.create');
//     Route::post('/sysadmin/credential/users', 'store')->name('sysadmin.credential.users.store');
//     Route::get('/sysadmin/credential/users/{id}', 'show')->name('sysadmin.credential.users.show');
//     Route::get('/sysadmin/credential/users/{id}/edit', 'edit')->name('sysadmin.credential.users.edit');
//     Route::put('/sysadmin/credential/users/{id}', 'update')->name('sysadmin.credential.users.update');
//     Route::delete('/sysadmin/credential/users/{id}', 'destroy')->name('sysadmin.credential.users.delete');
// });
Route::view('/sysadmin/dashboard', 'domains.sysadmin.dashboard')->name('sysadmin.dashboard');
Route::view('/sysadmin/reference/branches', 'domains.sysadmin.reference.branches')->name('sysadmin.reference.branches.index');
Route::view('/sysadmin/reference/education-levels', 'domains.sysadmin.reference.education-levels')->name('sysadmin.reference.education-levels.index');
Route::view('/sysadmin/reference/class-grades', 'domains.sysadmin.reference.class-grades')->name('sysadmin.reference.class-grades.index');
