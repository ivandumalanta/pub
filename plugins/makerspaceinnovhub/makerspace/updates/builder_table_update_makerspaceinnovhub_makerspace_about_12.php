<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceAbout12 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->text('title_tag')->default('web')->change();
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_about', function($table)
        {
            $table->text('title_tag')->default(null)->change();
        });
    }
}
