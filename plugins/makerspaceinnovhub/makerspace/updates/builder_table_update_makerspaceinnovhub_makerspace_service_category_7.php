<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceServiceCategory7 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_service_category', function($table)
        {
            $table->string('title_tag');
            $table->text('meta_description');
            $table->string('keywords');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_service_category', function($table)
        {
            $table->dropColumn('title_tag');
            $table->dropColumn('meta_description');
            $table->dropColumn('keywords');
        });
    }
}
