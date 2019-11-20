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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard','DashboardController@index');

//===================Игридиенты=================================
Route::get('dashboard/ingredients', 'IngredientController@index');

Route::get('dashboard/recipes/create', 'RecipeController@create');
Route::put('dashboard/recipes/create', 'RecipeController@store');
Route::GET('/dashboard/recipes/{p}/edit', 'RecipeController@edit');
Route::PUT('/dashboard/recipes/{p}/update', 'RecipeController@update');

//===================Рецепты====================================

Route::get('dashboard/recipes', 'RecipeController@index');
//Create
Route::get('dashboard/recipes/create', 'RecipeController@create');
Route::put('dashboard/recipes/create', 'RecipeController@store');
//Edit
Route::GET('/dashboard/recipes/{p}/edit', 'RecipeController@edit');
Route::PUT('/dashboard/recipes/{p}/update', 'RecipeController@update');
//Delete
Route::delete('dashboard/recipes/{r}', 'RecipeController@destroy');

//==============================================================


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
