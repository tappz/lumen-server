<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class RemoveFavoriteProduct extends Controller
{

	public function removeFavoriteProduct($product_id)
	{
		$input = Request::all();
		return response('Please set your result removeFavoriteProduct ');
	}
}
