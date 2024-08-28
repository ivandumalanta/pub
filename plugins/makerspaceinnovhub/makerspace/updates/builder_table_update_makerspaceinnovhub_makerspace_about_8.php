<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceAbout8 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->string('about_hero_title')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->text('about_hero_title')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
