<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaloveMaketTask extends Migration
{
    public function up()
    {
        Schema::create('solkalove_maket_task', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->dateTime('end_at')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->string('name');
            $table->string('discription');
            $table->string('status');
            $table->integer('id_leader');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solkalove_maket_task');
    }
}
