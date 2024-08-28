<?php namespace MakerspaceInnovhub\Makerspace\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMakerspaceinnovhubMakerspaceContact extends Migration
{
    public function up()
    {
        Schema::table('makerspaceinnovhub_makerspace_contact', function($table)
        {
            $table->text('hero_description');
            $table->string('address');
            $table->string('contact_num');
            $table->string('email');
            $table->string('work_hour');
            $table->string('title_tag');
            $table->text('meta_description');
            $table->string('keywords');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('hero_title')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('makerspaceinnovhub_makerspace_contact', function($table)
        {
            $table->dropColumn('hero_description');
            $table->dropColumn('address');
            $table->dropColumn('contact_num');
            $table->dropColumn('email');
            $table->dropColumn('work_hour');
            $table->dropColumn('title_tag');
            $table->dropColumn('meta_description');
            $table->dropColumn('keywords');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->text('hero_title')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
