<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_jobs', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('job_id')->unsigned();
          $table->foreign('job_id')->references('id')->on('jobs');
          $table->integer('employer_id')->unsigned();
          $table->foreign('employer_id')->references('id')->on('users');
          $table->integer('employee_id')->unsigned();
          $table->foreign('employee_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users_jobs');

    }
}
