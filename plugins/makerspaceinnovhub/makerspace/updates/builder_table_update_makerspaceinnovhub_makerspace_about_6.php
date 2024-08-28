<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceAbout6 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->renameColumn('about_hero_title', 'about_title');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->renameColumn('about_title', 'about_hero_title');
        });
    }
}
