<?php

namespace GetRight\Slider\Providers;

use GetRight\Slider\Models\Slide;
use GetRight\Slider\Repositories\SliderRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class SliderRepositoryProvider
 * @package GetRight\Sliders\Providers
 * @author getRight
 */
class SliderRepositoryProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('SliderRepository', function ($app) {
            return new SliderRepository(new Slide());
        });
    }

    public function provides() {
        return ['GetRight\Slider\Repositories\SliderRepository'];
    }
}
