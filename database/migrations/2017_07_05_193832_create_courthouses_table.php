<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourthousesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courthouses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courthouse');
            $table->string('street');
            $table->string('street2');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('country');
            $table->text('notes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courthouses');
    }
}
