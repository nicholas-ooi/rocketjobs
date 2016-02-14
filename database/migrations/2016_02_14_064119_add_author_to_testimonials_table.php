<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthorToTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Adding columns
        if (Schema::hasTable('testimonials')) {
            Schema::table('testimonials', function ($table) {
                $table->integer('author_id')->unsigned();
                $table->foreign('author_id')->references('id')->on('users');
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
        if (Schema::hasTable('testimonials')) {
            Schema::table('testimonials', function ($table) {
                $table->dropColumn('author_id');

            });
        }
    }
}
