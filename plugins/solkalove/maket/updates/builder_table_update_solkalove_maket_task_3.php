<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaloveMaketTask3 extends Migration
{
    public function up()
    {
        Schema::table('solkalove_maket_task', function($table)
        {
            $table->renameColumn('id_leader', 'depend_id');
        });
    }
    
    public function down()
    {
        Schema::table('solkalove_maket_task', function($table)
        {
            $table->renameColumn('depend_id', 'id_leader');
        });
    }
}
