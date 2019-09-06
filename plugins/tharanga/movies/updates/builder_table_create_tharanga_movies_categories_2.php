<?php namespace Tharanga\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTharangaMoviesCategories2 extends Migration
{
    public function up()
    {
        Schema::create('tharanga_movies_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->string('description', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tharanga_movies_categories');
    }
}
