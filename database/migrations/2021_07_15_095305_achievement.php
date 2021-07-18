<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Achievement extends Migration
{
    public function up()
    {
        Schema::create('achievement', function (Blueprint $table) {
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
        });
    }

    public function down()
    {
        Schema::dropIfExists('achievement');
    }
}
