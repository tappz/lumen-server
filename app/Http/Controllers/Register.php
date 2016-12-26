<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class Register extends Controller
{

	public function registerCustomer()
	{
		$input = Request::all();

		if (!isset($input['profile'])) {
			throw new \InvalidArgumentException('Required parameter $profile  registerCustomer');
		}
		$profile = $input['profile'];

		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  registerCustomer');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  registerCustomer');
		}
		$accept_language = $input['accept_language'];


		return response('Please set your result registerCustomer ');
	}
}
