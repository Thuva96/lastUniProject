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
        Schema::create('inward_admission_summaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->date('DOA');
            $table->date('DOD');
            $table->String('BHT_NO');
        
            $table->string('Reason_For_Admission');
            $table->string('Acute_Problem');
            $table->integer('Pulse');
            //$table->enum('Treatment_on_Discharge', ['Normal_Treatment', 'Special_Treatment']);
            $table->double('BP');
            $table->enum('Treatment_on_Discharge', ['Normal_Treatment', 'Special_Treatment']);
            $table->String('Special_Treatment');
            //$table->String('Treatment_on_Discharge');
            //$table->string('investigation');
            $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inward_admission_summaries');
    }
};
