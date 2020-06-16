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
Route::get('/', 'LevelOfEducationController@index');


Route::get('/learning_material', 'LearningMaterialController@index');


Route::get('/chapters', 'ChapterController@index');


// Route::get('/learningmaterialtype', 'LearningMaterialTypeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
