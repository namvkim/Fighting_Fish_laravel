<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewsComments extends Migration
{
    public function up()
    {
        Schema::create('news_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('news_id');
            $table->unsignedBigInteger('users_id');
            $table->text('content');
            $table->timestamps();
            $table->foreign('news_id')
                ->references('id')->on('news')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreign('users_id')
                ->references('id')->on('users')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('news_comments');
    }
}
