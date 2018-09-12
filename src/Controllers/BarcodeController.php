<?php

namespace SagunKho\BarcodeGenerator\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Zend\Barcode\Barcode;

class BarcodeController extends Controller
{
	public function index(Request $request)
	{
		// Only the text to draw is required.
		$barcode_options = ['text' => 'ZEND-FRAMEWORK'];

		// No required options.
		$renderer_options = [];
		$renderer = Barcode::factory(
			'code39',
			'image',
			$barcode_options,
			$renderer_options
		);
		
		$image_resource = $renderer->draw();
		
		return view("barcode::barcode", [
			'image_resource' => $image_resource
		]);
	}
}
