<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceAbout11 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->text('title_tag')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->text('meta_description')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->text('keywords')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->string('title_tag', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->string('meta_description', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->string('keywords', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
