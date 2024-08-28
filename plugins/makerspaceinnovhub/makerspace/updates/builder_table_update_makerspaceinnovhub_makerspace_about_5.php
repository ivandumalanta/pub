<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceAbout5 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->string('hero_img');
            $table->string('sub_hero_img');
            $table->string('mission_vission_img');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->dropColumn('hero_img');
            $table->dropColumn('sub_hero_img');
            $table->dropColumn('mission_vission_img');
        });
    }
}
