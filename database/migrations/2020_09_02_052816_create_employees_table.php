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
            $table->bigIncrements('id');
            $table->binary('image');
            $table->date('DOB');
            $table->date('birthDay');
            $table->string('blood_group');
            $table->string('fathers_name');
            $table->string('marital_status');
            $table->string('marriage_date');
            $table->string('spouse_name');
            $table->string('nationality');
            $table->string('place_of_birth');
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
        Schema::dropIfExists('employees');
    }
}
