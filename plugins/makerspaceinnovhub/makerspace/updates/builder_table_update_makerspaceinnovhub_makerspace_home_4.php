<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceHome4 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_home', function($table)
        {
            $table->string('rating_header');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_home', function($table)
        {
            $table->dropColumn('rating_header');
        });
    }
}
