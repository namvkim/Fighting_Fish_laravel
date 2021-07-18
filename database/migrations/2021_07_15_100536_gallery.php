<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gallery extends Migration
{
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('gallery_type_id');
            $table->string('title');
            $table->string('img');
            $table->text('content');
            $table->timestamps();
            $table->foreign('gallery_type_id')
                ->references('id')->on('gallery_type')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('gallery');
    }
}
