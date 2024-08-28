<?php namespace makerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceService extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_service', function($table)
        {
            $table->increments('id');
            $table->string('header');
            $table->text('description');
            $table->text('content');
            $table->text('title_tag');
            $table->text('meta_description');
            $table->string('keywords');
            $table->string('img_url')->nullable();
            $table->boolean('status');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_service');
    }
}
