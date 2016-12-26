<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class Product extends Controller
{

	public function productByBarcode()
	{
		$input = Request::all();
		if (!isset($input['barcode'])) {
			throw new \InvalidArgumentException('Required parameter $barcode  productByBarcode');
		}
		$barcode = $input['barcode'];

		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  productByBarcode');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  productByBarcode');
		}
		$accept_language = $input['accept_language'];


		return response('Please set your result productByBarcode');
	}

	public function productById($product_id)
	{
		$input = Request::all();
		return response('Please set your result productById');
	}


	public function relatedProducts($product_id)
	{
		$input = Request::all();
		return response('Please set your result relatedProducts');
	}
}
