<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceTeamMembers extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_team_members', function($table)
        {
            $table->boolean('status');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_team_members', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
