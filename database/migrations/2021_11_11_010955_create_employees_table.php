<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('name');
            $table->date('date_birth');
            $table->boolean('sex');
            $table->string('phone');
            $table->string('civil_status');
            $table->string('mother');
            $table->string('father');
            $table->string('nationality');
            $table->string('naturalness');
            $table->unsignedBigInteger('address_id');
            $table->string('breed');
            $table->boolean('deficient');
            $table->boolean('blood');
            $table->timestamps();

            $table->foreign('address_id')->references('id')->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
