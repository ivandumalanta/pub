<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceReviews extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_reviews', function($table)
        {
            $table->integer('rate');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_reviews', function($table)
        {
            $table->dropColumn('rate');
        });
    }
}
