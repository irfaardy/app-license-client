<?php
/* 
	Author: Irfa Ardiansyah <irfa.backend@protonmail.com>
*/
namespace Irfa\AppLicenseClient\Core;

use Illuminate\Support\Str;
use Ixudra\Curl\Facades\Curl;

class SerialConnector
{
	protected $res_active;
	protected $res_message;

	protected function checkSN()
	{
		$json = json_decode(Curl::to(config('irfa.app_license_client.url'))
	    ->withData(array('serial' => config('irfa.app_license_client.serial_number')))
	    ->post());
		$this->res_active = $json->data->active;
		$this->res_message = $json->data->message;

		return $this->res_active;
	}
}
