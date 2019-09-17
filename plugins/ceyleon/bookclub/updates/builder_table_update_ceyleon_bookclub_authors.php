<?php namespace Ceyleon\BookClub\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCeyleonBookclubAuthors extends Migration
{
    public function up()
    {
        Schema::table('ceyleon_bookclub_authors', function($table)
        {
            $table->string('name', 200);
        });
    }
    
    public function down()
    {
        Schema::table('ceyleon_bookclub_authors', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
