<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceServicePage extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_service_page', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('hero_title');
            $table->text('hero_description');
            $table->string('img_url')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_service_page');
    }
}
