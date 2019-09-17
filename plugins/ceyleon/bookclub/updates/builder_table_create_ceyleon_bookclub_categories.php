<?php namespace Ceyleon\BookClub\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeyleonBookclubCategories extends Migration
{
    public function up()
    {
        Schema::create('ceyleon_bookclub_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceyleon_bookclub_categories');
    }
}
