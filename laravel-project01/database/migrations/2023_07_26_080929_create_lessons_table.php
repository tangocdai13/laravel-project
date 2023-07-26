<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->bigInteger('course_id')->length(20)->foreign('course_id')->references('id')->on('courses');
            $table->bigInteger('section_id')->length(20)->default(null);
            $table->tinyInteger('video_type')->length(4);
            $table->string('video_url', 255);
            $table->string('time', 255);
            $table->boolean('preview');
            $table->text('content');
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
        Schema::dropIfExists('lessons');
    }
};
