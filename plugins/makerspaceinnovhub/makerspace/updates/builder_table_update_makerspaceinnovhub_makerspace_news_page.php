<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceNewsPage extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_news_page', function($table)
        {
            $table->text('title_tag')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->string('meta_description', 0)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->string('keywords', 0)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_news_page', function($table)
        {
            $table->dateTime('title_tag')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->dateTime('meta_description')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->dateTime('keywords')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
