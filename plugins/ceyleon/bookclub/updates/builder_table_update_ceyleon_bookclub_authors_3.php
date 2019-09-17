<?php namespace Ceyleon\BookClub\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCeyleonBookclubAuthors3 extends Migration
{
    public function up()
    {
        Schema::table('ceyleon_bookclub_authors', function($table)
        {
            $table->text('description');
            $table->dropColumn('book_id');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('ceyleon_bookclub_authors', function($table)
        {
            $table->dropColumn('description');
            $table->integer('book_id');
            $table->timestamp('created_at')->nullable()->default('NULL');
            $table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }
}
