<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class FavoriteProducts extends Controller
{

	public function getFavoriteProducts()
	{
		$input = Request::all();


		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  getFavoriteProducts');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  getFavoriteProducts');
		}
		$accept_language = $input['accept_language'];


		return response('Please set your result getFavoriteProducts');
	}
}
