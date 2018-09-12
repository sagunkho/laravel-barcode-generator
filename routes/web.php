<?php

Route::group([
	'namespace' => 'SagunKho\\BarcodeGenerator\\Controllers',
	'prefix' => 'barcode',
	'as' => 'barcode'
], function() {
	Route::get('/{type}/{text}', 'BarcodeController@index')->name('index');
});