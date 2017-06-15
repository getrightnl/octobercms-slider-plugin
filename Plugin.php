<?php namespace GetRight\Slider;

use Backend;
use Illuminate\Support\Facades\App;
use System\Classes\PluginBase;

/**
 * Slider Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Slider',
            'description' => 'Add sliders to your website.',
            'author'      => 'getRight',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        App::register('GetRight\Slider\Providers\SliderRepositoryProvider');
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'GetRight\Slider\Components\Slides' => 'SlideShow',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'getright.slider.some_permission' => [
                'tab' => 'Slider',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'slider' => [
                'label'       => 'Slides',
                'url'         => Backend::url('getright/slider/slides'),
                'icon'        => 'icon-leaf',
                'permissions' => ['getright.slider.*'],
                'order'       => 500,
            ],
        ];
    }
}
