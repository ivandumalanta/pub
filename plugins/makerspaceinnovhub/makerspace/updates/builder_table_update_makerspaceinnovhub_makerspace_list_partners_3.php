<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceListPartners3 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_list_partners', function($table)
        {
            $table->dropColumn('title_tag');
            $table->dropColumn('meta_description');
            $table->dropColumn('keywords');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_list_partners', function($table)
        {
            $table->string('title_tag', 255);
            $table->text('meta_description');
            $table->string('keywords', 255);
        });
    }
}
