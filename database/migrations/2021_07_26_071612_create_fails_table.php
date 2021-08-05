<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fails', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('laluan_fail')->nullable();
            $table->integer('saiz')->nullable();
            $table->string('pemilik')->nullable();

            $table->foreignId('laporan_id')->nullable();
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
        Schema::dropIfExists('fails');
    }
}
