<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceHome2 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_home', function($table)
        {
            $table->text('hero_title');
            $table->text('hero_description');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_home', function($table)
        {
            $table->dropColumn('hero_title');
            $table->dropColumn('hero_description');
        });
    }
}
