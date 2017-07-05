<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourtdatesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courtdates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150);
            $table->text('notes');
            $table->datetime('court_date');
            $table->integer('case_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('case_id')->references('id')->on('cases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courtdates');
    }
}
