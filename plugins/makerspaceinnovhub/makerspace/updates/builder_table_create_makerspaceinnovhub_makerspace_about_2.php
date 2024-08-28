<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceAbout2 extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->increments('id');
            $table->string('title_tag');
            $table->string('meta_description');
            $table->string('keywords');
            $table->string('about_header');
            $table->text('about_hero_description');
            $table->text('about_sub_description');
            $table->text('mission_description');
            $table->text('vision_description');
            $table->string('hero_img');
            $table->string('sub_hero_img');
            $table->string('mission_vission_img');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_about');
    }
}
