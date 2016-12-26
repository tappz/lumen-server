<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class Location extends Controller
{

	public function getBranches()
	{
		$input = Request::all();

		if (!isset($input['latitude'])) {
			throw new \InvalidArgumentException('Required parameter $latitude  getBranches');
		}
		$latitude = $input['latitude'];

		if (!isset($input['longitude'])) {
			throw new \InvalidArgumentException('Required parameter $longitude  getBranches');
		}
		$longitude = $input['longitude'];

		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  getBranches');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  getBranches');
		}
		$accept_language = $input['accept_language'];

		$range = $input['range'];


		return response('Please set your result getBranches');
	}

	public function getBranchCities()
	{
		$input = Request::all();


		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  getBranchCities');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  getBranchCities');
		}
		$accept_language = $input['accept_language'];


		return response('Please set your result getBranchCities');
	}

	public function getCityList($country_id)
	{
		$input = Request::all();


		return response('Please set your result getCityList');
	}


	public function getCountryList()
	{
		$input = Request::all();
		if (!isset($input['authorization'])) {
			throw new \InvalidArgumentException('Required parameter $authorization  getCountryList');
		}
		$authorization = $input['authorization'];

		if (!isset($input['accept_language'])) {
			throw new \InvalidArgumentException('Required parameter $accept_language  getCountryList');
		}
		$accept_language = $input['accept_language'];


		return response('Please set your result getCountryList');
	}

	public function getDistrictList($city_id)
	{
		$input = Request::all();
		return response('Please set your result getDistrictList');
	}

	public function getStatesList($country_id)
	{
		$input = Request::all();
		return response('Please set your result getStatesList');
	}

	public function getTownList($district_id)
	{
		$input = Request::all();
		return response('Please set your result getTownList');
	}
}
