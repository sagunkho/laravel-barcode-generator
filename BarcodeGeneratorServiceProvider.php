<?php

namespace SagunKho\BarcodeGenerator;

use Illuminate\Support\ServiceProvider;

class BarcodeGeneratorServiceProvider extends ServiceProvider
{
	public function boot()
	{
		/**
		 * Configurations
		 */
		$this->publishes([
			__DIR__ . '/config/barcode.php' => config_path('barcode.php')
		]);
		
		/**
		 * Routes
		 */
		$this->loadRoutesFrom(__DIR__ . '/routes/web.php');
		
		/**
		 * Views
		 */
		$this->loadViewsFrom(__DIR__ . '/resources/views', 'barcodegenerator');
	}
	
	public function register()
	{
	
	}
}