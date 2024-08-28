<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceHome extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_home', function($table)
        {
            $table->increments('id');
            $table->string('title_tag');
            $table->string('meta_description');
            $table->string('keywords');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_home');
    }
}
