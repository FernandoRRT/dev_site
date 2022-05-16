<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpAssgnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expassign', function (Blueprint $table) {
            $table->id();
            $table->string('assignment', 200);
            $table->unsignedBigInteger('id_experience');
            $table->timestamps();
        });
        Schema::table('expassign', function (Blueprint $table) {
            $table->foreign('id_experience')->references('id')->on('experience')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expassgn');
    }
}
