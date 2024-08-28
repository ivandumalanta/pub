<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceAbout4 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->text('mission_description');
            $table->text('vision_description');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->dropColumn('mission_description');
            $table->dropColumn('vision_description');
        });
    }
}
