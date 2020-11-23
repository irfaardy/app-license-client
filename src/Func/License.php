<?php
/* 
	Author: Irfa Ardiansyah <irfa.backend@protonmail.com>
*/
namespace Irfa\AppLicenseClient\Func;

use Irfa\AppLicenseClient\Core\SerialConnector;

class License extends SerialConnector
{

    public function check()
    {
        $res = $this->checkSN();

        return $res;
    }

    public function get()
    {
        return (object)['active' => $this->res_active,'message' => $this->res_message];
    }

}
