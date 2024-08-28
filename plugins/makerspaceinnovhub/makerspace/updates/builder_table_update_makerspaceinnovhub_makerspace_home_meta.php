<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceHomeMeta extends Migration
{
    public function up()
    {
        Schema::rename('makerspaceinnovhub_makerspace_metadata', 'makerspaceinnovhub_makerspace_home_meta');
    }
    
    public function down()
    {
        Schema::rename('makerspaceinnovhub_makerspace_home_meta', 'makerspaceinnovhub_makerspace_metadata');
    }
}
