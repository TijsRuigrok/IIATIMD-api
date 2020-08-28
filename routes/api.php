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

Route::get('/products','ProductController@index');
Route::get('/products/barcode/{barcode}','ProductController@showBarcode');

Route::get('/productsInList','ProductInListController@index');
Route::get('/productsInList/userId/{userId}','ProductInListController@showUserId');
Route::get('/productsInList/email/{email}','ProductInListController@showEmail');
Route::post('/addProductInList', 'ProductInListController@store');
Route::post('/deleteProductInList/{barcode}/{email}', 'ProductInListController@delete');

Route::get('/users','AndroidUserController@index');
Route::get('/users/{email}','AndroidUserController@show');
Route::post('/addUser', 'AndroidUserController@store');

// Formulier voor het testen van POST route
// Moet uitgecomment blijven
// Route::get('/producten/toevoegen','ProductController@create');
