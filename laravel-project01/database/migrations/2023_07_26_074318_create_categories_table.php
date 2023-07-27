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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->unique();
            $table->string('slug', 255)->unique();
            $table->integer('parent')->length(10)->comment('Dành cho sub danh mục');
            $table->integer('created_by')->length(10)->comment('Người tạo khoá học');
            $table->text('content');
            $table->string('meta_title', 255);
            $table->string('meta_desc', 255);
            $table->string('meta_keyword', 255);
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
        Schema::dropIfExists('categories');
    }
};
