<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         //Adding columns
        if (Schema::hasTable('jobs'))
        {
            Schema::table('jobs', function($table)
            {
              $table->string('venue');
              $table->decimal('amount', 5, 2);
              $table->string('payment_timeline');
              $table->string('company');
            });
        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
