<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamberDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamber_details', function (Blueprint $table) {
            $table->id();
            $table->integer('doctor_id')->nullable();
            $table->string('specialist')->nullable();
            $table->string('district')->nullable();
            $table->string('chamberaddress')->nullable();
            $table->string('date')->nullable();
            $table->string('starttime')->nullable();
            $table->string('endtime')->nullable();
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
        Schema::dropIfExists('chamber_details');
    }
}
