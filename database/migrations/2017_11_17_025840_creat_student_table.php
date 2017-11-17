<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student',	function(Blueprint	$table)	{	
            $table->increments('id'); 
            $table->string('student_id',10);	
            $table->string('name',20);
            $table->string('account',25);
            $table->string('password',25);
            $table->string('phone',20);
            $table->string('email',50);
            $table->boolean('sex');
            $table->string('class',10);
            $table->string('address',60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
