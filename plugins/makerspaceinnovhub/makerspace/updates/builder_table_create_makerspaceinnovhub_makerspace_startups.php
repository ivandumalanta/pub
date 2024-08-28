<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceStartups extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_startups', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('hero_title');
            $table->text('hero_description');
            $table->string('title_tag');
            $table->text('meta_description');
            $table->string('keywords');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_startups');
    }
}
