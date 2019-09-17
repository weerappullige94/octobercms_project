<?php namespace Ceyleon\BookClub\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteCeyleonBookclubOodi extends Migration
{
    public function up()
    {
        Schema::dropIfExists('ceyleon_bookclub_oodi');
    }
    
    public function down()
    {
        Schema::create('ceyleon_bookclub_oodi', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('name');
        });
    }
}
