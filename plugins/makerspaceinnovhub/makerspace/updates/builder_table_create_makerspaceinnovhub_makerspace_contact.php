<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceContact extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_contact', function($table)
        {
            $table->increments('id');
            $table->text('hero_title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_contact');
    }
}
