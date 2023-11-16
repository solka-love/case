<?php namespace SolkaLove\Maket\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSolkaloveMaketMeetings extends Migration
{
    public function up()
    {
        Schema::create('solkalove_maket_meetings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('theme');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('solkalove_maket_meetings');
    }
}
