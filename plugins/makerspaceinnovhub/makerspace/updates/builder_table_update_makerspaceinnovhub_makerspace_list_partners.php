<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceListPartners extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_list_partners', function($table)
        {
            $table->boolean('status');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_list_partners', function($table)
        {
            $table->dropColumn('status');
        });
    }
}
