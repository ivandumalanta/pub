<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceReviews2 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_reviews', function($table)
        {
            $table->string('img_url')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_reviews', function($table)
        {
            $table->integer('img_url')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
