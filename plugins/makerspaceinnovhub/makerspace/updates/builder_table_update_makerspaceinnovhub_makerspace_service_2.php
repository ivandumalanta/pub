<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceService2 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_service', function($table)
        {
            $table->renameColumn('category', 'category_id');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_service', function($table)
        {
            $table->renameColumn('category_id', 'category');
        });
    }
}
