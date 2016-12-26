<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class ProductSearch extends Controller
{

	public function search()
	{
		$input = Request::all();
		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  search');
		}
		$authorization = $input['authorization'];
		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  search');
		}
		$accept_language = $input['accept_language'];
		$phrase = $input['phrase'];
		$category = $input['category'];
		$page = $input['page'];
		$page_size = $input['page_size'];
		$sort = $input['sort'];
		$filters = $input['filters'];
		return response('Please set your result search');
	}
}
