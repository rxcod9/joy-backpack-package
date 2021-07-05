<?php

namespace Joy\ReplaceKeyword\Facades;

use Illuminate\Support\Facades\Facade;

class ReplaceKeyword extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'joy-replace-keyword';
    }
}
