<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_logs', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('serial_number');
            $table->integer('fingerprint_id');
            $table->date('check_in_date');
            $table->time('time_in');
            $table->time('time_out');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota_logs');
    }
}
