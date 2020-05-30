<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTempTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_temp', function (Blueprint $table) {
            $table->bigIncrements('question_id');
            $table->unsignedBigInteger('test_id');
            $table->string('question_text',2048);
            $table->integer('difficulty');
            $table->integer('note');
            $table->foreign('test_id')->references('test_id')->on('test')->onDelete('cascade');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_temp');
    }
}
