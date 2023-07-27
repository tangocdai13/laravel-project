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
        if (! Schema::hasTable('courses')) {
            Schema::create('courses', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->string('slug', 255)->unique();
                $table->string('link', 255);
                $table->decimal('price', $precision = 17, $scale = 2);
                $table->bigInteger('created_by')->length(20)->comment('Người tạo khoá học');
                $table->bigInteger('category_id')->length(20)->foreign('category_id')->references('id')->on('categories');
                $table->integer('lessions')->length(11)->comment('Tổng số bài học trong khoá học');
                $table->integer('view_count')->length(11)->comment('Tổng số lượt xem');
                $table->json('benefits');
                $table->json('fqa');
                $table->tinyInteger('is_feature')->length(1);
                $table->tinyInteger('is_online')->length(1);
                $table->text('description');
                $table->longText('content');
                $table->string('meta_title', 255);
                $table->string('meta_desc', 255);
                $table->string('meta_keyword', 255);
                $table->timestamps();
            });
        }
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
};
