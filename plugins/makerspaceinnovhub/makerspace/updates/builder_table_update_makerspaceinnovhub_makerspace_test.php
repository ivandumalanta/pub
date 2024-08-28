<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceTest extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_test', function($table)
        {
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_test', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
