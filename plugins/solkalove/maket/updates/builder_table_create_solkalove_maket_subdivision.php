<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaloveMaketSubdivision extends Migration
{
    public function up()
    {
        Schema::create('solkalove_maket_subdivision', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('subdivision');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solkalove_maket_subdivision');
    }
}
