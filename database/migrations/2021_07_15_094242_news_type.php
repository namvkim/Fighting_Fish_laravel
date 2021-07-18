<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewsType extends Migration
{
    public function up()
    {
        Schema::create('news_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('type', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news_type');
    }
}
