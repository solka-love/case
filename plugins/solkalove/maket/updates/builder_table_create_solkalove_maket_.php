<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaloveMaket extends Migration
{
    public function up()
    {
        Schema::create('solkalove_maket_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('fil_name');
            $table->string('information');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solkalove_maket_');
    }
}
