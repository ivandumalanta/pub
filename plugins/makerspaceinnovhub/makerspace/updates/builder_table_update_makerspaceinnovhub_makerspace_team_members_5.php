<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceTeamMembers5 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_team_members', function($table)
        {
            $table->renameColumn('img_url', 'formal_img_url');
            $table->renameColumn('title_tag', 'wacky_img_url');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_team_members', function($table)
        {
            $table->renameColumn('formal_img_url', 'img_url');
            $table->renameColumn('wacky_img_url', 'title_tag');
        });
    }
}
