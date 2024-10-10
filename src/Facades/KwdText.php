<?php

namespace Tonymans33\KwdText\Facades;

use Illuminate\Support\Facades\Facade;

class KwdText extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'kwdtext';
    }
}
