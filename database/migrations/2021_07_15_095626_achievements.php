<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Achievements extends Migration
{
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('classes_id');
            $table->string('authorName');
            $table->string('topic');
            $table->string('technology');
            $table->string('img');
            $table->string('shortContent');
            $table->text('content');
            $table->string('link');
            $table->timestamps();
            $table->foreign('classes_id')
                ->references('id')->on('classes')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('achievements');
    }
}
