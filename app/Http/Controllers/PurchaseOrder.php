<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class PurchaseOrder extends Controller
{

	public function getOrderList()
	{
		$input = Request::all();
		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  getOrderList');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  getOrderList');
		}
		$accept_language = $input['accept_language'];
		return response('Please set your result getOrderList');
	}


	public function getOrderDetail($order_id)
	{
		$input = Request::all();
		return response('Please set your result getOrderDetail');
	}


	public function setOrderAddress($order_id)
	{
		$input = Request::all();
		return response('Please set your result setOrderAddress ');
	}
}
