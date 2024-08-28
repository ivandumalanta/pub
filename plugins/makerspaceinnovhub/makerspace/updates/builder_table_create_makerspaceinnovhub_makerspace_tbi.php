<?php namespace makerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceTbi extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_tbi', function($table)
        {
            $table->increments('id');
            $table->string('company_name');
            $table->text('description');
            $table->string('logo')->nullable();
            $table->string('url_company');
            $table->string('title_tag');
            $table->text('meta_description');
            $table->text('keywords');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_tbi');
    }
}
