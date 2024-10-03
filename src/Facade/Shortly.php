<?php

namespace metetekin\ShortlyPackage\Facade;


use Illuminate\Support\Facades\Facade;


class Shortly extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'shortly';
    }
}
