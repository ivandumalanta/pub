<?php namespace makerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceTbi extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_tbi', function($table)
        {
            $table->boolean('status');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_tbi', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
