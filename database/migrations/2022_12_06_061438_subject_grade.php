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
        Schema:: create('subject_grade', function (Blueprint $table)
        {
            $table -> id();
            $table -> unsignedBigInteger('subject_id');
            $table -> string('grade');
            $table -> unsignedBigInteger('stud_id');
            $table ->foreign('subject_id')
                ->references('id')
                ->on('subjectName')
                ->onDelete('cascade');
            $table ->foreign('stud_id')
                ->references('id')
                ->on('student')
                ->onDelete('cascade');
            
        }
    );
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
