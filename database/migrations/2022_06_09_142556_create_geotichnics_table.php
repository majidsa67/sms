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
        Schema::create('geotichnics', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('map_order_registration_number');
            $table->integer('total_building_area');
            $table->enum('type_of_land',['Fine_grained_lands','Sandy_alluvium','Large_sand_alluvium']);
            $table->integer('total_number_of_floors');
            $table->integer('occupancy_level_downstairs');
            $table->integer('number_of_underground_floors');
            $table->integer('number_of_machine_boreholes')->nullable();
            $table->string('machine_bore_depth')->nullable();
            $table->string('written_request_of_bore_number')->nullable();
            $table->integer('number_of_manual_wells')->nullable();
            $table->string('manual_well_depth')->nullable();
            $table->string('written_request_of_well_number')->nullable();
            $table->enum('guard_structure',['YES','NO']);
            $table->enum('upload_and_cut_in_place',['YES','NO']);
            $table->enum('in_well_vibration_test',['YES','NO']);
            $table->enum('bedrock',['YES','NO']);
            $table->enum('drilling_surcharge',['YES','NO']);
            $table->enum('number_of_payment',['CASH','ONE_INSTALLMENT','TWO_INSTALLMENT','THREE_INSTALLMENT']);

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
        Schema::dropIfExists('geotichnics');
    }
};
