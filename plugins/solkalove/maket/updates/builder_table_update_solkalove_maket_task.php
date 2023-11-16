<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaloveMaketTask extends Migration
{
    public function up()
    {
        Schema::table('solkalove_maket_task', function($table)
        {
            $table->integer('subdivision_id');
        });
    }
    
    public function down()
    {
        Schema::table('solkalove_maket_task', function($table)
        {
            $table->dropColumn('subdivision_id');
        });
    }
}
