<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaloveMaketEmployee extends Migration
{
    public function up()
    {
        Schema::rename('solkalove_maket_', 'solkalove_maket_employee');
    }
    
    public function down()
    {
        Schema::rename('solkalove_maket_employee', 'solkalove_maket_');
    }
}
