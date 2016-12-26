<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class Customer extends Controller
{

	public function getCustomer()
	{
		$input = Request::all();
		if (!isset($input['is_init'])) {
			throw new \InvalidArgumentException('Required parameter $is_init  getCustomer');
		}
		$is_init = $input['is_init'];

		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  getCustomer');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  getCustomer');
		}
		$accept_language = $input['accept_language'];

		return response('Please set your result getCustomer');
	}

	public function updateCustomer()
	{
		$input = Request::all();


		if (!isset($input['profile'])) {
			throw new \InvalidArgumentException('Required parameter $profile  updateCustomer');
		}
		$profile = $input['profile'];

		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  updateCustomer');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  updateCustomer');
		}
		$accept_language = $input['accept_language'];


		return response('Please set your result updateCustomer');
	}
}
