<?php namespace Tharanga\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTharangaMoviesCategories extends Migration
{
    public function up()
    {
        Schema::table('tharanga_movies_categories', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->string('description', 255)->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('tharanga_movies_categories', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->text('description')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
