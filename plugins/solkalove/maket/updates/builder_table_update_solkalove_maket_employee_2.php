<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaloveMaketEmployee2 extends Migration
{
    public function up()
    {
        Schema::table('solkalove_maket_employee', function($table)
        {
            $table->integer('department_id');
        });
    }
    
    public function down()
    {
        Schema::table('solkalove_maket_employee', function($table)
        {
            $table->dropColumn('department_id');
        });
    }
}
