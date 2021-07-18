<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Staffs extends Migration
{
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('staffs_type_id');
            $table->string('name');
            $table->text('content');
            $table->string('facebook');
            $table->string('linkin');
            $table->string('twitter');
            $table->string('instagram');
            $table->timestamps();
            $table->foreign('staffs_type_id')
                ->references('id')->on('staffs_type')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
