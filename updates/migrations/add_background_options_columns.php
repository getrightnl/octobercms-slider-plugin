<?php

namespace GetRight\Slider\Updates\Migrations;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * Class CreateSlidesTable
 * @package GetRight\Slider\Updates\Migrations
 */
class AddBackGroundSizeOptionsToSlidesTable extends Migration
{
    public function up()
    {
        Schema::table('getright_slider_slides', function($table) {
            $table->string('background_size_mode', 75)->default('cover');
            $table->integer('background_position_x')->nullable();
            $table->integer('background_position_y')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('getright_slider_slides');
    }
}
