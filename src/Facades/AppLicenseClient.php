<?php
/* 
	Author: Irfa Ardiansyah <irfa.backend@protonmail.com>
*/
namespace Irfa\AppLicenseClient\Facades;

use Illuminate\Support\Facades\Facade;

class AppLicenseClient extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Irfa\AppLicenseClient\Func\License::class;
    }
}
