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

Route::view('/', 'landing');
Route::view('/test', 'includes.app-o');
Route::view('/disclosure', 'public-disclosure');
Route::view('/about-school', 'about-school');
Route::view('/executive-welcome', 'executive-welcome');
Route::view('/school-history', 'school-history');
Route::view('/school-decorum', 'school-decorum');
Route::view('/contact-us', 'contact-us');
Route::view('/rules-and-regulations', 'rules-and-regulations');
Route::view('/inportant-infomation', 'inportant-information');
Route::view('/academics', 'academy');
Route::view('/admission', 'admission');
Route::view('/facilities', 'facilities');
Route::view('/activities', 'activities');
Route::view('/events-and-blog', 'events');
Route::view('/gallery', 'gallery');
Route::view('/transfer-certificate', 'transfer-certificate');
Route::view('/instructors', 'instructors');

