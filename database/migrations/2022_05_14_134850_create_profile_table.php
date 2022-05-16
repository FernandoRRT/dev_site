<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('area', 50);
            $table->string('bio', 500);
            $table->string('city', 100);
            $table->string('phone', 20);
            $table->string('email', 100);
            $table->string('website', 100);
            $table->string('linkedin', 100);
            $table->string('github', 100);
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
        Schema::dropIfExists('profile');
    }
}
