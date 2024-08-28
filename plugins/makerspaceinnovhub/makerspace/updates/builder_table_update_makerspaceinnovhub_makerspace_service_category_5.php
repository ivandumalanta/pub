<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceServiceCategory5 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_service_category', function($table)
        {
            $table->renameColumn('id', 'category_id');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_service_category', function($table)
        {
            $table->renameColumn('category_id', 'id');
        });
    }
}
