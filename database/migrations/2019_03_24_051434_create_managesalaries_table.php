<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagesalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managesalaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_name');
            $table->string('designation_type');
            $table->string('working_days');
            $table->string('tax');
            $table->string('gross_salary');
//            $table->foreign('employee_id')->references('id')->on('users');
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
        Schema::dropIfExists('managesalaries');
    }
}
