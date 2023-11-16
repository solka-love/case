<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaloveMaketEmployeeTask extends Migration
{
    public function up()
    {
        Schema::create('solkalove_maket_employee_task', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('employee_id');
            $table->integer('task_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solkalove_maket_employee_task');
    }
}
