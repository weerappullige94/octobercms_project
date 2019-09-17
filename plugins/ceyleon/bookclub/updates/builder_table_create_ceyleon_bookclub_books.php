<?php namespace Ceyleon\BookClub\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCeyleonBookclubBooks extends Migration
{
    public function up()
    {
        Schema::create('ceyleon_bookclub_books', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('language');
            $table->string('isbn');
            $table->double('file_size', 10, 0);
            $table->integer('no_of_pages');
            $table->double('price', 10, 0);
            $table->string('cover_page');
            $table->text('tags');
            $table->integer('publisher_id');
            $table->integer('book_categories_id');
            $table->integer('digital_publisher_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ceyleon_bookclub_books');
    }
}
