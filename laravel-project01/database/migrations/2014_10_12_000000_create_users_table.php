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
        if (! Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name', 255);
                $table->string('phone', 255)->unique()->default(null);
                $table->string('email', 255)->unique();
                $table->string('password', 255);
                $table->timestamp('email_verified_at');
                $table->tinyInteger('type')->comment('1: Admin system, 2: teacher, 3: Student');
//            $table->rememberToken();
                $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
