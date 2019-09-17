<?php namespace Ceyleon\BookClub\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeyleonBookclubOodi extends Migration
{
    public function up()
    {
        Schema::create('ceyleon_bookclub_oodi', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceyleon_bookclub_oodi');
    }
}
