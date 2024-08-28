<?php namespace makerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceNews3 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_news', function($table)
        {
            $table->boolean('status');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_news', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
