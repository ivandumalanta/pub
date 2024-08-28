<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceMetadata extends Migration
{
    public function up()
    {
        Schema::rename('makerspaceinnovhub_makerspace_home', 'makerspaceinnovhub_makerspace_metadata');
    }
    
    public function down()
    {
        Schema::rename('makerspaceinnovhub_makerspace_metadata', 'makerspaceinnovhub_makerspace_home');
    }
}
