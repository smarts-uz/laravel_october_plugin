<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMoviesDetails extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_details', function($table)
        {
            $table->dropColumn('image');
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_details', function($table)
        {
            $table->string('image', 255)->nullable();
        });
    }
}
