<?php

namespace SagunKho\BarcodeGenerator\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Zend\Barcode\Barcode;
use Response;

class BarcodeController extends Controller
{
	public function index(Request $request, $type, $text)
	{
		// Only the text to draw is required.
		$barcode_options = ['text' => $text];

		// No required options.
		$renderer_options = [];
		$renderer = Barcode::factory(
			$type,
			'image',
			$barcode_options,
			$renderer_options
		);
		
		$response = Response::make($renderer->render(), 200);
		
		$response->header("Content-Type", 'image/png');
		
		return $response;
	}
}
