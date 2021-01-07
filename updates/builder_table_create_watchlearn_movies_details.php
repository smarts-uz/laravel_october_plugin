<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateWatchlearnMoviesDetails extends Migration
{
    public function up()
    {
        Schema::create('watchlearn_movies_details', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('watchlearn_movies_details');
    }
}
