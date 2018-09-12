<?php

namespace SagunKho\BarcodeGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class BarcodeGeneratorFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'barcodegenerator';
	}
}
