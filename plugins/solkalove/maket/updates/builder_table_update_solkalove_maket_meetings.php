<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSolkaloveMaketMeetings extends Migration
{
    public function up()
    {
        Schema::table('solkalove_maket_meetings', function($table)
        {
            $table->dateTime('time');
        });
    }
    
    public function down()
    {
        Schema::table('solkalove_maket_meetings', function($table)
        {
            $table->dropColumn('time');
        });
    }
}
