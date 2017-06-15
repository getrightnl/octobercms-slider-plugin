<?php

namespace GetRight\Slider\Facades;

use October\Rain\Support\Facade;

/**
 * @see \GetRight\Slider\Repositories\SliderRepository
 */
class SliderRepository extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'SliderRepository';
    }
}
