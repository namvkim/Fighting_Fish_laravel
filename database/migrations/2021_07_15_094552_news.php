<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class News extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('news_type_id');
            $table->string('title');
            $table->text('shortContent');
            $table->text('content');
            $table->string('img');
            $table->integer('users_like')->default(0);
            $table->timestamps();
            $table->foreign('news_type_id')
                ->references('id')->on('news_type')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}
