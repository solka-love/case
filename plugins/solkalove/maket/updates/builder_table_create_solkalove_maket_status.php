<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaloveMaketStatus extends Migration
{
    public function up()
    {
        Schema::create('solkalove_maket_status', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('status');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solkalove_maket_status');
    }
}
