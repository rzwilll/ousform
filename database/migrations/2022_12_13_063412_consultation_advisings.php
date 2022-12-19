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
        Schema:: create('consultation_advisings', function (Blueprint $table)
        {
            $table -> id();
            $table -> unsignedBigInteger('report_id');

            $table -> string('date_desc')->nullable();
            $table -> string('advising_nature_desc')->nullable();
            $table -> string('action_desc')->nullable();

            $table -> foreign('report_id')
                ->references('id')
                -> on('reports')
                ->onDelete('cascade');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $table->timestamps();
=======
=======
>>>>>>> parent of 4f3c8c9 (--)
=======
>>>>>>> parent of 4f3c8c9 (--)
=======
>>>>>>> parent of 4f3c8c9 (--)
=======
>>>>>>> parent of 4f3c8c9 (--)
           
            
>>>>>>> parent of 4f3c8c9 (--)
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
