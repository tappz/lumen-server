<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class AddBackInStockSubscriptions extends Controller
{

	public function addBackInStockSubscriptions()
	{
		$input = Request::all();
		if (!isset($input['product'])) {
			throw new \InvalidArgumentException('Required  $product parameter  addBackInStockSubscriptions');
		}
		$product = $input['product'];
		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  addBackInStockSubscriptions');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  addBackInStockSubscriptions');
		}
		$accept_language = $input['accept_language'];
		return response('Please set your result addBackInStockSubscriptions ');
	}
}
