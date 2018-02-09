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
            $table->boolean('is_published')->default(0);
            $table->string('name', 150);
            $table->string('title')->nullable();
            $table->string('intro')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('upper_content')->nullable();
            $table->text('lower_content')->nullable();
            $table->text('bio')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('googleplus')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('other_link')->nullable();
            $table->string('image')->nullable();
            $table->string('banner')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->nullable();
            $table->string('lang', 20)->default('en');
            $table->string('video')->nullable();
            $table->string('video2')->nullable();
            $table->string('video3')->nullable();
            $table->integer('order_column')->unsigned()->nullable();

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
