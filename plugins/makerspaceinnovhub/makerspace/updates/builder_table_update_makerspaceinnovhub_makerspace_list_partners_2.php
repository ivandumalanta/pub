<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceListPartners2 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_list_partners', function($table)
        {
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_list_partners', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
