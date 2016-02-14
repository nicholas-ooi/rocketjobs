<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Adding columns
        if (Schema::hasTable('users'))
        {
            Schema::table('users', function($table)
            {
                $table->string('status');
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
        //Dropping them
        if (Schema::hasTable('users'))
        {
            Schema::table('users', function($table)
            {
                $table->string('status');
            });
        }
    }
}
