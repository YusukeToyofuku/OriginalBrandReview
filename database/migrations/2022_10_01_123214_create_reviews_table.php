<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('post_id');
        $table->unsignedBigInteger('user_id');
        $table->integer('stars');
        $table->text('title');
        $table->text('comment');
        $table->timestamps();

        $table->foreign('post_id')->references('id')->on('posts');
        $table->foreign('user_id')->references('id')->on('users');
        $table->unique(['post_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
