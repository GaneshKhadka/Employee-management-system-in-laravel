<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigInteger('leaves_count')->nullable();
            $table->string('username');
            $table->text('image')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('role')->default('admin');
            $table->bigInteger('salary')->nullable();
            $table->string('email',100)->unique();
            $table->string('password');
            $table->boolean('status')->nullable();
            $table->bigInteger('phone');
            $table->string('address');
            $table->string('gender');
            $table->date('dob');
            $table->date('join_date');
            $table->string('job_type');
            $table->string('city');
            $table->bigInteger('age');
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
        Schema::dropIfExists('users');
    }
}
