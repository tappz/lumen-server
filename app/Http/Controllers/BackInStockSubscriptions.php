<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class BackInStockSubscriptions extends Controller
{
	public function getBackInStockSubscriptions()
	{
		$input = Request::all();
		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  getBackInStockSubscriptions');
		}
		$authorization = $input['authorization'];
		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  getBackInStockSubscriptions');
		}
		$accept_language = $input['accept_language'];
		return response('Please set your result getBackInStockSubscriptions');
	}
}
