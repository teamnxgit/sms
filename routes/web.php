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

Route::get('/', function () {
    return view('welcome');
});
/*
Auth::routes();
*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/students/','StudentController@students');

Route::post('/students/search/{keyword}','StudentController@search');

Route::get('/students/view/{id}','StudentController@view');

Route::get('/students/new/','StudentController@new');

Route::post('/students/add/','StudentController@add');

Route::get('/grades/','GradeController@grades');

Route::get('/grades/new','GradeController@new');

Route::POST('/grades/add','GradeController@add');

Route::POST('/grades/remove','GradeController@remove');
