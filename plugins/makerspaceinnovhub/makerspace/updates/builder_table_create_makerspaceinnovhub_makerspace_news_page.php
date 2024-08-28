<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceNewsPage extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_news_page', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('hero_title');
            $table->text('hero_description');
            $table->string('img_url')->nullable();
            $table->dateTime('title_tag');
            $table->dateTime('meta_description');
            $table->dateTime('keywords');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_news_page');
    }
}
