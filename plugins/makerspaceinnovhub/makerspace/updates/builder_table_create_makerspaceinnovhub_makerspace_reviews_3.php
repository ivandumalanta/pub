<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceReviews3 extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_reviews', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->text('content');
            $table->integer('img_url')->nullable();
            $table->string('title_tag');
            $table->text('meta_description');
            $table->string('keywords');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('status');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_reviews');
    }
}
