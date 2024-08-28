<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceTbi2 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_tbi', function($table)
        {
            $table->dropColumn('title_tag');
            $table->dropColumn('meta_description');
            $table->dropColumn('keywords');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_tbi', function($table)
        {
            $table->string('title_tag', 255);
            $table->text('meta_description');
            $table->text('keywords');
        });
    }
}
