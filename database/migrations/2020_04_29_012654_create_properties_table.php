<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('address');
            $table->longText('feature');
            $table->integer('rooms');
            $table->integer('bathroom');
            $table->integer('featured')->default(0);
            $table->integer('square_foot');
            $table->integer('price');
            $table->integer('user_id');
            $table->integer('status_id');
            $table->integer('type_id');
            $table->integer('state_id');
            $table->integer('category_id');
            $table->integer('photo_id')->default(0);
            $table->integer('video_id')->default(0);
            $table->integer('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
