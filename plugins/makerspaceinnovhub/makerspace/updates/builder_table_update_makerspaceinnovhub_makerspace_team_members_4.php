<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceTeamMembers4 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_team_members', function($table)
        {
            $table->text('title_tag');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_team_members', function($table)
        {
            $table->dropColumn('title_tag');
        });
    }
}
