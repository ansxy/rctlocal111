<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('serial_number');
            $table->string('gender');
            $table->string('email');
            $table->integer('fingerprint_id');
            $table->integer('fingerprint_select');
            $table->date('user_date');
            $table->time('time_in');
            $table->integer('del_fingerid');
            $table->integer('add_fingerid');
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
        Schema::dropIfExists('anggota');
    }
}
