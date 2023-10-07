<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogHashtagPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog__hashtag_post', function (Blueprint $table) {
            $table->unsignedBigInteger('hashtag_id');
            $table->unsignedBigInteger('post_id');

            $table->foreign('hashtag_id')
                ->references('id')
                ->on('blog__hashtag')->cascadeOnDelete();

            $table->foreign('post_id')
                ->references('id')
                ->on('blog__post')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog__hashtag_post');
    }
}
