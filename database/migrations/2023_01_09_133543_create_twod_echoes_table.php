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
        Schema::create('twod_echoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->date('Date');
            $table->string('Doneby');
            $table->integer('LVH_PRESENT_NO');
            $table->double('LVEDO');
            $table->double('IVS');
            $table->double('LVESD');
            $table->double('PW');
            $table->double('LVEF');
            $table->double('LA');
            $table->double('TMVA');
            $table->double('AO');
            $table->double('DMVA');
            $table->string('MV');
            $table->string('MR_GRADE');
            $table->string('AV');
            $table->string('PV');
            $table->string('TV');
            $table->string('PA');
            $table->string('LV_RWMD');
            $table->string('LA_LV_Clot');
            $table->string('Pericardial_effusion');
            $table->string('Others');
            $table->string('Conclution');
            $table->string('Recommendation');
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
        Schema::dropIfExists('twod_echoes');
    }
};
