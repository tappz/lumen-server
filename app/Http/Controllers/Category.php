<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class Category extends Controller
{
	public function getCategories()
	{
		$input = Request::all();
		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  getCategories');
		}
		$authorization = $input['authorization'];
		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  getCategories');
		}
		$accept_language = $input['accept_language'];
		return response('Please set your result getCategories');
	}

	public function getCategory($category_id)
	{
		$input = Request::all();
		return response('Please set your result getCategory');
	}
}
