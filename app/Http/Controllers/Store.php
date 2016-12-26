<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class Store extends Controller
{

	public function setStore()
	{
		$input = Request::all();
		if (!isset($input['store'])) {
			throw new \InvalidArgumentException('Required parameter $store  setStore');
		}
		$store = $input['store'];
		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  setStore');
		}
		$authorization = $input['authorization'];
		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  setStore');
		}
		$accept_language = $input['accept_language'];
		return response('Please set your result setStore ');
	}
}
