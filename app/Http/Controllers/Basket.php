<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class Basket extends Controller
{
	public function getBasket()
	{
		$input = Request::all();
		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  getBasket');
		}
		$authorization = $input['authorization'];
		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  getBasket');
		}
		$accept_language = $input['accept_language'];
		return response('Please set your result getBasket');
	}


	public function mergeBasket($anonymous_basket_id)
	{
		$input = Request::all();
		return response('Please set your result mergeBasket ');
	}

	public function getBasketById($basket_id)
	{
		$input = Request::all();
		return response('Please set your result getBasketById');
	}

	public function selectBasketAddress($basket_id)
	{
		$input = Request::all();
		return response('Please set your result selectBasketAddress ');
	}


	public function getContract($basket_id)
	{
		$input = Request::all();
		return response('Please set your result getContract');
	}

	public function selectBasketDiscount($basket_id)
	{
		$input = Request::all();
		return response('Please set your result selectBasketDiscount ');
	}


	public function deleteBasketDiscount($basket_id, $promo_code)
	{
		$input = Request::all();
		return response('Please set your result deleteBasketDiscount as a DELETE method ?');
	}

	public function selectBasketGiftCheque($basket_id)
	{
		$input = Request::all();
		return response('Please set your result selectBasketGiftCheque ');
	}


	public function deleteBasketGiftCheque($basket_id, $cheque_number)
	{
		$input = Request::all();
		return response('Please set your result deleteBasketGiftCheque as a DELETE method ?');
	}


	public function setGiftWrapping($basket_id)
	{
		$input = Request::all();
		return response('Please set your result setGiftWrapping ');
	}


	public function updateBasket($basket_id)
	{
		$input = Request::all();
		return response('Please set your result updateBasket ');
	}


	public function getBasketV2Payment($basket_id)
	{
		$input = Request::all();
		return response('Please set your result getBasketV2Payment');
	}


	public function getBasketV2Shippment($basket_id)
	{
		$input = Request::all();
		return response('Please set your result getBasketV2Shippment');
	}

	public function setBasketV2Shippment($basket_id)
	{
		$input = Request::all();
		return response('Please set your result setBasketV2Shippment ');
	}


	public function deleteUserPoints($basket_id)
	{
		$input = Request::all();
		return response('Please set your result deleteUserPoints as a DELETE method ?');
	}

	public function setUserPoints($basket_id)
	{
		$input = Request::all();

		return response('Please set your result setUserPoints ');
	}
}
