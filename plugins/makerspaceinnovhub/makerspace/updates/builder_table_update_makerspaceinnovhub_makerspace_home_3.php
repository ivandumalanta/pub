<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceHome3 extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_home', function($table)
        {
            $table->text('hero_img_url');
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_home', function($table)
        {
            $table->dropColumn('hero_img_url');
        });
    }
}
