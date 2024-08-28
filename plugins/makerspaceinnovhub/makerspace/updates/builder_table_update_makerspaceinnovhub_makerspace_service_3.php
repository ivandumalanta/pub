<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceService3 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_service', function($table)
        {
            $table->dropColumn('content');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_service', function($table)
        {
            $table->text('content');
        });
    }
}
