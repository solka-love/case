<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaloveMaketTask4 extends Migration
{
    public function up()
    {
        Schema::table('solkalove_maket_task', function($table)
        {
            $table->renameColumn('status', 'status_id');
        });
    }
    
    public function down()
    {
        Schema::table('solkalove_maket_task', function($table)
        {
            $table->renameColumn('status_id', 'status');
        });
    }
}
