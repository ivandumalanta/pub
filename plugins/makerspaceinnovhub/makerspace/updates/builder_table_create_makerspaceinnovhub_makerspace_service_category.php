<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceServiceCategory extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_service_category', function($table)
        {
            $table->increments('id');
            $table->string('category_name');
            $table->text('description');
            $table->string('img_url');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('status');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_service_category');
    }
}
