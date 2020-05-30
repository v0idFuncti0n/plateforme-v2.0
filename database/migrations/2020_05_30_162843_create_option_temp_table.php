<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_temp', function (Blueprint $table) {
            $table->bigIncrements('option_id');
            $table->string('option_text');
            $table->integer('point');
            $table->unsignedBigInteger('question_id')->nullable();
            $table->unsignedBigInteger('binaire_id')->nullable();
            $table->timestamps();
            $table->foreign('question_id')->references('question_id')->on('question_temp')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('option_temp');
    }
}
