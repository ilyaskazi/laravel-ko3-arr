<?php namespace Ko3\Arr;

/**
 * @see \Ko3\Arr\
 */
class ArrFacade extends \Illuminate\Support\Facades\Facade
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
