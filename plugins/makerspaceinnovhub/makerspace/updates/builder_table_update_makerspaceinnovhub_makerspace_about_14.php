<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceAbout14 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->renameColumn('teams_header', 'team_header');
            $table->renameColumn('teams_description', 'team_description');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->renameColumn('team_header', 'teams_header');
            $table->renameColumn('team_description', 'teams_description');
        });
    }
}
