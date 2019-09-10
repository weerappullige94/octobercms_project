<?php namespace Tharanga\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTharangaMoviesWidget extends Migration
{
    public function up()
    {
        Schema::create('tharanga_movies_widget', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('title', 255);
            $table->text('description');
            $table->integer('user_id');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tharanga_movies_widget');
    }
}
