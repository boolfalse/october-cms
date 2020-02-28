<?php namespace Boolfalse\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBoolfalseMovies extends Migration
{
    public function up()
    {
        Schema::create('boolfalse_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('boolfalse_movies_');
    }
}
