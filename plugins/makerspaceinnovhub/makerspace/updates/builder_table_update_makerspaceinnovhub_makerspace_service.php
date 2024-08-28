<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceService extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_service', function($table)
        {
            $table->string('category');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_service', function($table)
        {
            $table->dropColumn('category');
        });
    }
}
