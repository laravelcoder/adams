<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_published')->default(0);
            $table->string('name', 150);
            $table->string('title')->nullable();
            $table->string('intro')->nullable();
            $table->string('phone')->default('801-888-8888');
            $table->string('email')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('upper_content')->nullable();
            $table->text('lower_content')->nullable();
            $table->text('bio')->nullable();
            $table->string('image')->nullable();
            $table->string('banner')->nullable();
            $table->string('slug')->nullable();
            $table->string('lang', 20)->default('en');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('googleplus')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('other_link')->nullable();
            $table->string('staff_type');
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
        Schema::drop('staff');
    }
}
