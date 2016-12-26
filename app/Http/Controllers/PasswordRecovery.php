<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class PasswordRecovery extends Controller
{

	public function lostPassword()
	{
		$input = Request::all();
		if (!isset($input['lost_password'])) {
			throw new \InvalidArgumentException('Required parameter $lost_password  lostPassword');
		}
		$lost_password = $input['lost_password'];

		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  lostPassword');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  lostPassword');
		}
		$accept_language = $input['accept_language'];
		return response('Please set your result lostPassword ');
	}
}
