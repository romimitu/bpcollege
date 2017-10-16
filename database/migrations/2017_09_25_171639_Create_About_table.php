<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('collageName');
            $table->text('about');
            $table->text('principal_msg');
            $table->string('principal_img');
            $table->string('location');
            $table->string('area');
            $table->string('course');
            $table->string('teacher');
            $table->string('staff');
            $table->string('student');
            $table->text('history');
            $table->text('mission');
            $table->text('about_img');
            $table->text('mission_img');
            $table->text('facts_img');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('email');
            $table->string('mobile');
            $table->text('map');
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
        
        Schema::dropIfExists('abouts');
    }
}
