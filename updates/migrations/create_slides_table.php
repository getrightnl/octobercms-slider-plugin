<?php

namespace GetRight\Slider\Updates\Migrations;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * Class CreateSlidesTable
 * @package GetRight\Slider\Updates\Migrations
 */
class CreateSlidesTable extends Migration
{
    public function up()
    {
        Schema::create('getright_slider_slides', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('name', 75);
            $table->string('upper_title', 75);
            $table->string('middle_title', 75);
            $table->string('lower_title',75);
            $table->string('link_one');
            $table->string('link_two');
            $table->string('link_one_text', 55);
            $table->string('link_two_text', 55);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('getright_slider_slides');
    }
}
