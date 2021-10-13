<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
})->middleware("auth");

Route::prefix('students')->group(function () {

    Route::get('','App\Http\Controllers\StudentController@index')->name('student.index')->middleware("auth");
    Route::get('create', 'App\Http\Controllers\StudentController@create')->name('student.create')->middleware("auth");
    Route::post('store', 'App\Http\Controllers\StudentController@store')->name('student.store')->middleware("auth");
    Route::get('edit/{student}', 'App\Http\Controllers\StudentController@edit')->name('student.edit')->middleware("auth");
    Route::post('update/{student}', 'App\Http\Controllers\StudentController@update')->name('student.update')->middleware("auth");
    Route::post('delete/{student}', 'App\Http\Controllers\StudentController@destroy')->name('student.destroy')->middleware("auth");
    Route::get('show/{student}', 'App\Http\Controllers\StudentController@show')->name('student.show')->middleware("auth");
});

Route::prefix('schools')->group(function () {

    Route::get('','App\Http\Controllers\SchoolController@index')->name('school.index')->middleware("auth");
    Route::get('create', 'App\Http\Controllers\SchoolController@create')->name('school.create')->middleware("auth");
    Route::post('store', 'App\Http\Controllers\SchoolController@store')->name('school.store')->middleware("auth");
    Route::get('edit/{school}', 'App\Http\Controllers\SchoolController@edit')->name('school.edit')->middleware("auth");
    Route::post('update/{school}', 'App\Http\Controllers\SchoolController@update')->name('school.update')->middleware("auth");
    Route::post('delete/{school}', 'App\Http\Controllers\SchoolController@destroy')->name('school.destroy')->middleware("auth");
    Route::get('show/{school}', 'App\Http\Controllers\SchoolController@show')->name('school.show')->middleware("auth");
});

Route::prefix('attendanceGroup')->group(function () {

    Route::get('','App\Http\Controllers\AttendanceGroupController@index')->name('attendanceGroup.index')->middleware("auth");
    Route::get('create', 'App\Http\Controllers\AttendanceGroupController@create')->name('attendanceGroup.create')->middleware("auth");
    Route::post('store', 'App\Http\Controllers\AttendanceGroupController@store')->name('attendanceGroup.store')->middleware("auth");
    Route::get('edit/{attendanceGroup}', 'App\Http\Controllers\AttendanceGroupController@edit')->name('attendanceGroup.edit')->middleware("auth");
    Route::post('update/{attendanceGroup}', 'App\Http\Controllers\AttendanceGroupController@update')->name('attendanceGroup.update')->middleware("auth");
    Route::post('delete/{attendanceGroup}', 'App\Http\Controllers\AttendanceGroupController@destroy')->name('attendanceGroup.destroy')->middleware("auth");
    Route::get('show/{attendanceGroup}', 'App\Http\Controllers\AttendanceGroupController@show')->name('attendanceGroup.show')->middleware("auth");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ->middleware("auth")
