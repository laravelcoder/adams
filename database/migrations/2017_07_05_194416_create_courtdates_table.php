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
            $table->string('title', 150)->nullable();
            $table->text('notes')->nullable();
            $table->datetime('court_date')->nullable();
            $table->integer('case_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
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
