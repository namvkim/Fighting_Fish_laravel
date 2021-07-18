<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Banner extends Migration
{
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->string('img');
            $table->string('video');
            $table->string('background');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banner');
    }
}
