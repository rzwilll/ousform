<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema:: create('advisee', function (Blueprint $table)
        {
            $table -> id();
            $table -> string('total_num');
            $table -> unsignedBigInteger('user_id');
            $table -> unsignedBigInteger('student_eval_id');
            $table -> foreign('user_id')
                ->references('id')
                -> on('users')
                ->onDelete('cascade');
            $table ->foreign('student_eval_id')
                ->references('id')
                ->on('student_eval')
                ->onDelete('cascade');
            
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
};
