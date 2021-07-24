<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Enroll extends Migration
{
    public function up()
    {
        Schema::create('enroll', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('img');
            $table->char('phone', 20);
            $table->string('school');
            $table->string('email');
            $table->string('address');
            $table->string('circumstance');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enroll');
    }
}
