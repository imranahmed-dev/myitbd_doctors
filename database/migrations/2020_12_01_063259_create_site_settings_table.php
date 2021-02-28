<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyname')->nullable();
            $table->string('sologan')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('mobile')->nullable();
            $table->string('hotlinenumber')->nullable();
            $table->string('email')->unique()->nullable();
            $table->text('logo')->nullable();
            $table->text('banner')->nullable();
            $table->text('footerlogo')->nullable();
            $table->text('localaddress')->nullable();
            $table->text('stateaddress')->nullable();
            $table->text('mapcode')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('site_settings');
    }
}
