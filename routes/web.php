<?php
use Illuminate\Support\Facades\Route;
Route::get('/', 'HomeController@index');
Route::get('portfolio-details', 'HomeController@portfolioDetails');
Route::post('contact', 'HomeController@contact');
