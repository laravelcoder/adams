<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_published')->default(0);
            $table->string('service');
            $table->string('intro')->nullable();
            $table->text('upper_content')->nullable();
            $table->text('lower_content')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('banner')->nullable();
            $table->string('slug')->nullable();
            $table->string('lang', 20)->default('en');
            $table->string('icon_class')->nullable();
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
        Schema::drop('services');
    }
}
