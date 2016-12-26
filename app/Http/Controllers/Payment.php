<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class Payment extends Controller
{

	public function setPaymentMethod($basket_id)
	{
		$input = Request::all();
		return response('Please set your result setPaymentMethod ');
	}
}
