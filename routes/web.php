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

// Frontend
Route::get('/', 'HomeController@index')
        ->name('beranda');
Route::get('/subsidi', 'SubsidiController@index')
        ->name('subsidi');
Route::get('/komersil', 'KomersilController@index')
        ->name('komersil');
Route::get('/detail', 'DetailController@index')
        ->name('detail');

Route::get('/contact', 'ContactController@index')
        ->name('contact');

// Landing Page
Route::get('/landingpage', 'LandingController@index')
        ->name('landingpage');

// Backend
Route::prefix('admin')
        ->middleware('auth')
        ->namespace('admin')
        ->group(function(){
        Route::get('/', 'DashboardController@index')
                ->name('dashboard');

        });
        
Auth::routes();

