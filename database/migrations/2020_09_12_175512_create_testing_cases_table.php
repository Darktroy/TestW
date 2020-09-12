<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestingCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testing_cases', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->float('length');
            $table->float('width');
            $table->float('average_of_values')->nullable();
            $table->float('area')->nullable();
            $table->float('area_square')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('testing_cases');
    }
}
