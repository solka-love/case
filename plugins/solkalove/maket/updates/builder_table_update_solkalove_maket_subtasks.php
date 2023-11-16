<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaloveMaketSubtasks extends Migration
{
    public function up()
    {
        Schema::table('solkalove_maket_subtasks', function($table)
        {
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::table('solkalove_maket_subtasks', function($table)
        {
            $table->dropColumn('name');
        });
    }
}
