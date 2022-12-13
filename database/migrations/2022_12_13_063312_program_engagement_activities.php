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
        Schema:: create('program_engagement_activities', function (Blueprint $table)
        {
            $table -> id();
            $table -> unsignedBigInteger('advisee_id');
            $table -> unsignedBigInteger('acadyr_id');

            $table -> string('objective_desc')->nullable();
            $table -> string('activities_desc')->nullable();
            $table -> string('accomplishment_desc')->nullable();

            $table -> foreign('acadyr_id')
                ->references('id')
                -> on('acad_years')
                ->onDelete('cascade');
            $table ->foreign('advisee_id')
                ->references('id')
                ->on('advisees')
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
