<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class Index extends Controller
{

	public function getIndex()
	{
		$input = Request::all();


		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  getIndex');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  getIndex');
		}
		$accept_language = $input['accept_language'];

		return response('Please set your result getIndex');
	}
}
