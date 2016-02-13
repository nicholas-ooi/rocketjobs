<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsersTable extends Migration
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
                $table->string('name');
                $table->string('phone_number');
                $table->date('dob');
                $table->boolean('verified');
                $table->string('verifying_document');
                $table->string('image');
                $table->string('type');
                $table->string('address');
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
                $table->dropColumn('name');
                $table->dropColumn('phone_number');
                $table->dropColumn('dob');
                $table->dropColumn('verified');
                $table->dropColumn('verifying_document');
                $table->dropColumn('image');
                $table->dropColumn('type');
                $table->dropColumn('address');
            });
        }
    }
}
