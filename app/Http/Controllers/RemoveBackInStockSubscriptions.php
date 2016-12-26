<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class RemoveBackInStockSubscriptions extends Controller
{

	public function removeBackInStockSubscriptions()
	{
		$input = Request::all();
		if (!isset($input['product'])) {
			throw new \InvalidArgumentException('Required parameter $product  removeBackInStockSubscriptions');
		}
		$product = $input['product'];

		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  removeBackInStockSubscriptions');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  removeBackInStockSubscriptions');
		}
		$accept_language = $input['accept_language'];
		return response('Please set your result removeBackInStockSubscriptions ');
	}
}
