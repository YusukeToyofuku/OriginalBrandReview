<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
           $table->bigIncrements('id');
            $table->string('title',50);
            $table->text('body');
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('brandname_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('brandname_id')->references('id')->on('brandnames');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
