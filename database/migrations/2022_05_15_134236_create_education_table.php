<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('course', 50);
            $table->string('institution', 50);
            $table->string('type', 50);
            $table->string('start', 15);
            $table->string('conclusion', 15);
            $table->unsignedBigInteger('id_profile');
            $table->timestamps();
        });
        Schema::table('education', function (Blueprint $table) {
            $table->foreign('id_profile')->references('id')->on('profile')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
