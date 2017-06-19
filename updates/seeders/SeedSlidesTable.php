<?php

namespace GetRight\Slider\Updates\Seeders;

use Faker\Factory;
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

        if(App::environment() != 'dummy') return;

        // Check if directory exists else make it.
        if(!file_exists(storage_path('app/media/slides'))){
            mkdir(storage_path('app/media/slides'));
        }

        Model::unguard();

        $faker = Factory::create();

        $slide = Slide::create( [
            'name'         => 'First slide',
            'upper_title'  => substr($faker->words(3, true),0,75),
            'middle_title' => substr($faker->words(2,true),0,75),
            'lower_title'  => substr($faker->words(1, true),0,75),
            'link_one'     => url('/#about'),
            'link_two'     => url('/#contact'),
            'link_one_text'   => 'About',
            'link_two_text'    => 'Contact',
            'background_size_mode' => 'contain',
            'background_position_x' => 30,
            'background_position_y' => 20
        ] );

        $slide->image()->create([
            'data' => themes_path('getright-construction/assets/images/slide.png')
        ]);
    }

}
