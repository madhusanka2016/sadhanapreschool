<?php

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
Route::get('/', 'main@home')->name('home'); //Home Routes
Route::get('/About', 'main@about')->name('about'); //About Routes
Route::get('/Academics', 'main@academics')->name('academics');
Route::get('/Academics/{id}', 'main@academicspages')->name('academicspages');
Route::get('/Extra', 'main@extra')->name('extra');
Route::get('/Extra/{id}', 'main@extrapages')->name('extrapages');
Route::get('/Achievements', 'main@achievements')->name('achievements');
Route::get('/Achievements/{id}', 'main@achievementspages')->name('achievementspages');
Route::get('/Gallery', 'main@gallery')->name('gallery');
Route::get('/Gallery/{id}', 'main@album')->name('album');
Route::get('/Registations', 'main@registration')->name('registration');
Route::get('/Registations/Staff', 'main@staff')->name('staff');

Route::get('/Event/Annual', 'main@eventannual')->name('eventannual'); //About Routes
Route::get('/Event/Annual/{id}', 'main@eventannualpage')->name('eventannualpage'); //About Routes
Route::get('/Event/{id}', 'main@eventpage')->name('event'); //About Routes
Route::get('/Event', 'main@event')->name('event'); //About Routes

Route::get('/Contact', 'main@contact')->name('contact'); //About Routes




