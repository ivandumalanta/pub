<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceHome extends Migration
{
    public function up()
    {
        Schema::rename('makerspaceinnovhub_makerspace_home_meta', 'makerspaceinnovhub_makerspace_home');
    }
    
    public function down()
    {
        Schema::rename('makerspaceinnovhub_makerspace_home', 'makerspaceinnovhub_makerspace_home_meta');
    }
}
