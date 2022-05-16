<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course', 100);
            $table->string('institution', 100);
            $table->string('method', 20);
            $table->string('conclusion', 20);
            $table->unsignedBigInteger('id_profile');
            $table->timestamps();
        });
        Schema::table('courses', function (Blueprint $table) {
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
        Schema::dropIfExists('courses');
    }
}
