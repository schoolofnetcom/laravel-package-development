<?php

namespace Modules\Location\Facades;

use Illuminate\Support\Facades\Facade;

class Location extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Location.location';
    }
}
