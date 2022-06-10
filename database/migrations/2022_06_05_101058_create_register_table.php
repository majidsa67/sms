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
        Schema::create('register', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->integer('license_number')->nullable();
            $table->integer('membership_number')->nullable();
            $table->integer('signature_number')->nullable();
            $table->enum('Responsible_side',['BOSS','VEEP','MEMBER'])->nullable();
            $table->string('trend');
//            Profile of the CEO
            $table->string('CEO_name')->nullable();
            $table->string('CEO_lastname')->nullable();
            $table->integer('CEO_id')->nullable();
            $table->integer('CEO_phone_number')->nullable();
//            boss of the Board
            $table->string('boss_name')->nullable();
            $table->string('boss_lastname')->nullable();
            $table->integer('boss_id')->nullable();
            $table->integer('boss_phone_number')->nullable();
//            member of the Board
            $table->string('member_name')->nullable();
            $table->string('member_lastname')->nullable();
            $table->integer('member_id')->nullable();
            $table->integer('member_phone_number')->nullable();

            $table->string('Laboratory_address');
            $table->integer('Laboratory_phone_number')->nullable();
            $table->string('office_address');
            $table->integer('office_phone_number');
            $table->string('email')->nullable();
            $table->longText('IDPay');
            $table->integer('Insurance_number')->nullable();
            $table->string('password');
            $table->string('password_confirmation');
            $table->boolean('Accept_rules')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('register');
    }
};
