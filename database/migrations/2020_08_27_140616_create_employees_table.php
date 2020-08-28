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
            $table->string('first_name');
            $table->string('last_name');
            $table->bigInteger('company_id')->nullable();
//            $table->foreign('company_id')->references('id')->on('companies');
            $table->string('email');
            $table->bigInteger('phone');
            $table->timestamps();
        });
//        Schema::table('employees', function($table) {
//            $table->foreign('company_id')->references('id')->on('companies');
//        });
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
