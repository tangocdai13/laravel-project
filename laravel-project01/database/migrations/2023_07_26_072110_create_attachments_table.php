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
        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_path', 255)->default('COLLATE');
            $table->string('attachable_type', 255)->nullable(false);
            $table->string('file_name', 255)->default('COLLATE');
            $table->bigInteger('attachable_id')->length(20)->unsigned()->nullable(false);
            $table->string('extension', 255)->default('COLLATE');
            $table->string('mime_type', 255)->default('COLLATE');
            $table->integer('size')->length(10)->unsigned()->nullable()->default(0);
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
        Schema::dropIfExists('attachments');
    }
};
