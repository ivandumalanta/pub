<?php namespace makerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMakerspaceinnovhubMakerspaceBlog extends Migration
{
    public function up()
    {
        Schema::create('makerspaceinnovhub_makerspace_blog', function($table)
        {
            $table->increments('id');
            $table->string('blog_author');
            $table->text('blog_description');
            $table->text('blog_content');
            $table->text('blog_img')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('makerspaceinnovhub_makerspace_blog');
    }
}
