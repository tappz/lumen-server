<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class Pay extends Controller
{

	public function purchaseBasketCreditCard($basket_id)
	{
		$input = Request::all();
		return response('Please set your result purchaseBasketCreditCard ');
	}
}
