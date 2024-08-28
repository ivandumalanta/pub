<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceTest extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_test', function($table)
        {
            $table->integer('id');
            $table->string('name');
            $table->string('category');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_test');
    }
}
