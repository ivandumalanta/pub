<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteMakerspaceinnovhubMakerspaceTest extends Migration
{
    public function up()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_test');
    }
    
    public function down()
    {
        Schema::create('makerspaceinnovhub_makerspace_test', function($table)
        {
            $table->integer('id');
            $table->string('name', 255);
            $table->string('category', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('description');
        });
    }
}
