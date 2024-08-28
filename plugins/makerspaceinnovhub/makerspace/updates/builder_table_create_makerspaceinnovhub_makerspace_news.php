<?php namespace makerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceNews extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_news', function($table)
        {
            $table->increments('id');
            $table->string('news_title');
            $table->string('news_author');
            $table->text('news_description');
            $table->text('news_content');
            $table->string('news_img')->nullable();
            $table->string('title_tag');
            $table->text('meta_description');
            $table->text('keywords');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_news');
    }
}
