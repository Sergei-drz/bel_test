<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/company', function () {
    return view('company');
})->name('company');

Route::get('/staff', function () {
    return view('staff');
})->name('staff');



Route::post('/staff/all/{id}/update', 'StaffController@updateMessageSubmit')->name('staff-update-submit');

Route::get('/staff/all/{id}/delete', 'StaffController@deleteMessage')->name('staff-delete');
Route::get('/staff/all/{id}/update', 'StaffController@updateMessage')->name('staff-update');

Route::get('/staff/all/{id}', 'StaffController@ShowOneMessage')->name('staff-data-one');
Route::get('/staff/all', 'StaffController@allData')->name('staff-data');
Route::post('/staff/submit', 'StaffController@submit')->name('staff-form');
