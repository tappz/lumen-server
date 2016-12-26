<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class Login extends Controller
{

	public function login()
	{
		$input = Request::all();
		if (!isset($input['login'])) {
			throw new \InvalidArgumentException('Required parameter $login  login');
		}
		$login = $input['login'];

		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  login');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  login');
		}
		$accept_language = $input['accept_language'];


		return response('Please set your result login ');
	}
}
