<?php

namespace GetRight\Slider\Components;

use Cms\Classes\ComponentBase;
use GetRight\Slider\Facades\SliderRepository;
use GetRight\Slider\Models\Settings;

/**
 * Class Slides
 * @package GetRight\Slider\Components
 * @author getRight
 */
class Slides extends ComponentBase
{
    /**
     * @var $slides
     */
    public $slides;

    /**
     * @var $captionEnabled
     */
    public $captionEnabled;

    /**
     * Define component details.
     *
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'Slides Component',
            'description' => 'Show a slideshow on frontend.'
        ];
    }

    /**
     * Define component properties.
     *
     * @return array
     */
    public function defineProperties()
    {
        return [];
    }

    /**
     * This method is called when component runs.
     */
    public function onRun() {
        $this->slides = $this->getSlides();
        $this->captionEnabled = Settings::get('caption_enabled', true);
    }

    /**
     * Get all slides.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    private function getSlides()
    {
        return SliderRepository::all();
    }

}
