<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nickname', 14);
            $table->string('email', 50)->unique();
            $table->string('picture_url')->nullable();
            $table->string('about');
            $table->string('password');
            $table->string('role', 15)->default('user');
            $table->string('identifier')->default(0);
            $table->string('steam_id', 20);
            $table->time('active_from');
            $table->time('active_to');
            $table->date('date_of_b');
            $table->integer('reputation');

        });
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
}
