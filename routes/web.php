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
//Create
Route::get('dashboard/ingredients/create', 'IngredientController@create');
Route::put('dashboard/ingredients/create', 'IngredientController@store');
//Edit
Route::GET('/dashboard/ingredients/{ing}/edit', 'IngredientController@edit');
Route::PUT('/dashboard/ingredients/{ing}/update', 'IngredientController@update');
//Delete
Route::delete('dashboard/ingredients/{ing}', 'IngredientController@destroy');

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
