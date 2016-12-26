<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class AddFavoriteProduct extends Controller
{
	public function addFavoriteProduct($product_id)
	{
		$input = Request::all();
		return response('Please set your result addFavoriteProduct ');
	}
}
