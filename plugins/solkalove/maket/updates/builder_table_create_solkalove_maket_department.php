<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaloveMaketDepartment extends Migration
{
    public function up()
    {
        Schema::create('solkalove_maket_department', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('department');
            $table->integer('subdivision_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solkalove_maket_department');
    }
}
