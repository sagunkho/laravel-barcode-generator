<?php

Route::get('barcode/{type}/{text}', 'SagunKho\BarcodeGenerator\Controllers\BarcodeController@index')->name('barcode');