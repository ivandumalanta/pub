<?php namespace makerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceNews2 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_news', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('title_tag')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->text('news_author')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_news', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->text('title_tag')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->string('news_author', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
