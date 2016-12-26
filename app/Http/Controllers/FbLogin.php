<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class FbLogin extends Controller
{

	public function facebookLogin()
	{
		$input = Request::all();
		if (!isset($input['fb_login'])) {
			throw new \InvalidArgumentException('Required parameter $fb_login  facebookLogin');
		}
		$fb_login = $input['fb_login'];

		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  facebookLogin');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  facebookLogin');
		}
		$accept_language = $input['accept_language'];


		return response('Please set your result facebookLogin ');
	}
}
