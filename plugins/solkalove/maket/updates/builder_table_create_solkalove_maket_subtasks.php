<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaloveMaketSubtasks extends Migration
{
    public function up()
    {
        Schema::create('solkalove_maket_subtasks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('description');
            $table->integer('task_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solkalove_maket_subtasks');
    }
}
