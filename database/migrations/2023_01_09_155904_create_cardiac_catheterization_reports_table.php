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
        Schema::create('cardiac_catheterization_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->integer('Cath_No');
            $table->integer('Aortic_Pressure');
            $table->string('Catheter_use');
            $table->string('Left_main_coronary_artery');
            $table->string('Lad_Branches');
            $table->string('Circumflex_and_Branches');
            $table->string('Rca_and_Branches');
            $table->string('Conclution');
            $table->string('Recommendation');
            $table->string('Consultant_cardiologist');
            $table->date('Date');
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
        Schema::dropIfExists('cardiac_catheterization_reports');
    }
};
