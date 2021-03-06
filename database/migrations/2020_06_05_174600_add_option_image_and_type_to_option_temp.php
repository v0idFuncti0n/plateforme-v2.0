<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOptionImageAndTypeToOptionTemp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('option_temp', function (Blueprint $table) {
            $table->string('option_image')->nullable(true);
            $table->string('type');
            $table->string('option_text')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('option_temp', function (Blueprint $table) {
            $table->dropColumn('option_image');
            $table->dropColumn('type');
        });
    }
}
