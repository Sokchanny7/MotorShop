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

Route::get('/', 'IndexController@index');    
Route::get('customer', 'CustomerController@index');
Route::get('supplier', 'SupplierController@index');
Route::get('address', 'AddressController@index');
Route::get('import_item', 'ImportItemController@index');
Route::get('sell_item', 'SellItemController@index');
