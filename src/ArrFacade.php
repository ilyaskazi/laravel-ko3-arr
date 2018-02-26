<?php

namespace Ko3\Arr;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ko3\Arr\
 */
class ArrFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'arr';
    }
}
