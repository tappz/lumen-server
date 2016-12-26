<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class UserAgreement extends Controller
{

	public function userAgreement()
	{
		$input = Request::all();
		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  userAgreement');
		}
		$authorization = $input['authorization'];
		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  userAgreement');
		}
		$accept_language = $input['accept_language'];


		return response('Please set your result userAgreement');
	}
}
