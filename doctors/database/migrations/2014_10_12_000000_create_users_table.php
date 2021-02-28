<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('role')->nullable()->comment('1=admin,2=user');
            $table->integer('usertype')->nullable()->comment('1=admin,2=patient,3=doctor,4=compounder');
            $table->integer('doctor_id')->nullable();
            $table->integer('chamber_id')->nullable();
            $table->string('name');
            $table->string('mobile')->unique();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->string('password');
            $table->string('age')->nullable();
            $table->text('address')->nullable();
            $table->string('photo')->nullable();
            
            /*for doctors*/
            $table->string('designation')->nullable();
            $table->string('degree')->nullable();
            $table->string('certificate')->nullable();
            $table->string('district')->nullable();
            
            
            $table->integer('type')->default(0);
            $table->integer('status')->default(0);
            $table->integer('is_deleted')->default(0);
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
        Schema::dropIfExists('users');
    }
}
