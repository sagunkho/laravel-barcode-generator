<?php

Route::group([
	'namespace' => 'SagunKho\\BarcodeGenerator\\Controllers',
	'prefix' => 'barcode',
	'as' => 'barcode'
], function() {
	Route::get('/', 'BarcodeController@index')->name('index');
});