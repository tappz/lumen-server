<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class Address extends Controller
{

	public function addAddress()
	{
		$input = Request::all();
		if (!isset($input['address'])) {
			throw new \InvalidArgumentException('Required parameter $address  addAddress');
		}
		$address = $input['address'];

		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  addAddress');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  addAddress');
		}
		$accept_language = $input['accept_language'];
		return response('Please set your result addAddress ');
	}


	public function deleteAddress()
	{
		$input = Request::all();
		if (!isset($input['address'])) {
			throw new \InvalidArgumentException('Required parameter $address  deleteAddress');
		}
		$address = $input['address'];
		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  deleteAddress');
		}
		$authorization = $input['authorization'];
		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  deleteAddress');
		}
		$accept_language = $input['accept_language'];
		return response('Please set your result deleteAddress as a DELETE method ?');
	}

	public function updateAddress()
	{
		$input = Request::all();
		if (!isset($input['address'])) {
			throw new \InvalidArgumentException('Required parameter $address  updateAddress');
		}
		$address = $input['address'];
		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  updateAddress');
		}
		$authorization = $input['authorization'];
		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  updateAddress');
		}
		$accept_language = $input['accept_language'];
		return response('Please set your result updateAddress');
	}
}
