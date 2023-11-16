<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaloveMaketTask2 extends Migration
{
    public function up()
    {
        Schema::table('solkalove_maket_task', function($table)
        {
            $table->integer('parent_id');
        });
    }
    
    public function down()
    {
        Schema::table('solkalove_maket_task', function($table)
        {
            $table->dropColumn('parent_id');
        });
    }
}
