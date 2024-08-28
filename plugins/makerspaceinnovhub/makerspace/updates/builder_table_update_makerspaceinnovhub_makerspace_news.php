<?php namespace makerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceNews extends Migration
{
    public function up()
    {
        Schema::rename('makerspaceinnovhub_makerspace_blog', 'makerspaceinnovhub_makerspace_news');
        Schema::table('makerspaceinnovhub_makerspace_news', function($table)
        {
            $table->string('news_title', 255);
            $table->string('news_author', 255);
            $table->text('news_description');
            $table->text('news_content');
            $table->renameColumn('blog_img', 'news_img');
            $table->dropColumn('blog_title');
            $table->dropColumn('blog_author');
            $table->dropColumn('blog_description');
            $table->dropColumn('blog_content');
        });
    }
    
    public function down()
    {
        Schema::rename('makerspaceinnovhub_makerspace_news', 'makerspaceinnovhub_makerspace_blog');
        Schema::table('makerspaceinnovhub_makerspace_blog', function($table)
        {
            $table->dropColumn('news_title');
            $table->dropColumn('news_author');
            $table->dropColumn('news_description');
            $table->dropColumn('news_content');
            $table->renameColumn('news_img', 'blog_img');
            $table->string('blog_title', 255);
            $table->string('blog_author', 255);
            $table->text('blog_description');
            $table->text('blog_content');
        });
    }
}
