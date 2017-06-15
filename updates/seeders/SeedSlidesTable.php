<?php

namespace GetRight\Slider\Updates\Seeders;

use GetRight\Slider\Models\Slide;
use Seeder;
use Model;
use Illuminate\Support\Facades\App;

/**
 * Class SeedSlidesTable
 * @package GetRight\Slider\Updates\Seeders
 * @author getRight
 */
class SeedSlidesTable extends Seeder {

    /**
     * Run the seeders.
     */
    public function run() {

        if(App::environment() != 'production') return;

        // Check if directory exists else make it.
        if(!file_exists(storage_path('app/media/slides'))){
            mkdir(storage_path('app/media/slides'));
        }

        Model::unguard();

        $slide = Slide::create( [
            'name'         => 'Eerste slide',
            'upper_title'  => 'De marktleider in',
            'middle_title' => 'mini betonpompen',
            'lower_title'  => 'kleine-betonpompen.nl',
            'link_one'     => url('/over-ons'),
            'link_two'     => url('/contact'),
            'link_one_text'   => 'Over ons',
            'link_two_text'    => 'Contact',
        ] );

        $slide->image()->create([
            'data' => themes_path('kleine-betonpomp/assets/images/slide.png')
        ]);

        $slide = Slide::create( [
            'name'         => 'Eerste slide',
            'upper_title'  => 'De marktleider in',
            'middle_title' => 'mini betonpompen',
            'lower_title'  => 'kleine-betonpompen.nl',
            'link_one'     => url('/over-ons'),
            'link_two'     => url('/contact'),
            'link_one_text'   => 'Over ons',
            'link_two_text'    => 'Contact',
        ] );

        $slide->image()->create([
            'data' => themes_path('kleine-betonpomp/assets/images/slide.png')
        ]);
    }

}
