<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('content');
            $table->text('notes')->nullable();
            $table->string('slug')->nullable();
            $table->string('status')->nullable();
            $table->string('image')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('fb_title')->nullable();
            $table->string('gp_title')->nullable();
            $table->string('tw_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('category_id')->index();
            $table->Integer('user_id')->nullable();
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
        Schema::drop('posts');
    }
}
