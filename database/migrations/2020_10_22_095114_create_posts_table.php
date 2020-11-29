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
            $table->id();
            $table->string('title');
            $table->string('desc')->nullable();
            $table->text('body');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('sport_type')->nullable();
            $table->string('category')->nullable();
            $table->string('tag')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->boolean('is_published')->default(0);
            $table->boolean('published_by_admin');
            $table->timestamps();

            $table->foreign('author_id')->references('id')->on('authors');
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
