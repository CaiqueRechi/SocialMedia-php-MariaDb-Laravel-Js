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
            $table->string('title'); // nome do post
            $table->text('content'); // conteudo do post
            $table->string('image'); // imagem de destaque
            $table->integer('visits')->default(0);
            $table->foreignId('author_id')->references('id')->on('users'); // id da categoria (foreign key)
            $table->foreignId('category_id')->constrained(); // id do autor (foreign key)
            $table->timestamps();
            $table->softDeletes();
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
