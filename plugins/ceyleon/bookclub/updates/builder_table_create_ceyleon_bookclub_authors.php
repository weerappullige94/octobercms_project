<?php namespace Ceyleon\BookClub\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeyleonBookclubAuthors extends Migration
{
    public function up()
    {
        Schema::create('ceyleon_bookclub_authors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('book_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceyleon_bookclub_authors');
    }
}
