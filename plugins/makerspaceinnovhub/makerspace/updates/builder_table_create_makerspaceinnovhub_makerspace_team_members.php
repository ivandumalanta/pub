<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceTeamMembers extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_team_members', function($table)
        {
            $table->increments('id');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('position');
            $table->string('img_url');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_team_members');
    }
}
