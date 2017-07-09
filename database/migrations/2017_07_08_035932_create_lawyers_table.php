<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLawyersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->text('upper_content')->nullable();
            $table->text('lower_content')->nullable();
            $table->text('bio')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('image')->nullable();
            $table->string('banner')->nullable();
            $table->string('slug')->nullable();
            $table->string('lang', 20)->default('en');
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lawyers');
    }
}
