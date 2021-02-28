<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoronaTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corona_tests', function (Blueprint $table) {
            $table->id();
            
            /*step 1*/
            $table->string('name')->nullable();
            $table->string('age')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            /*step 2*/
            $table->string('jor')->nullable()->default(0);
            $table->string('sordi')->nullable()->default(0);
            $table->string('kashi')->nullable()->default(0);
            $table->string('golabetha')->nullable()->default(0);
            $table->string('shaskosto')->nullable()->default(0);
            $table->string('bomi')->nullable()->default(0);
            $table->string('bukebetha')->nullable()->default(0);
            $table->string('sadnapawa')->nullable()->default(0);
            /*stemp 3*/
            $table->string('protibeshi_akranto')->nullable()->default(0);
            $table->string('poribar_akranto')->nullable()->default(0);
            $table->string('poribar_jor_kashi')->nullable()->default(0);
            /*result*/
            $table->string('result')->nullable()->default(0);
            
            
            $table->string('status')->default(0);
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
        Schema::dropIfExists('corona_tests');
    }
}
