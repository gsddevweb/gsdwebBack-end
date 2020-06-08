<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Resource('levelOfEducation', 'LevelOfEducationController');
Roure::Resource('learningMaterialType','LearningMaterialTypeController');
Route::Resource('subjects','SubjectController');
// Route::Resource('users','User');
Route::Resource('chapters','ChapterController');
