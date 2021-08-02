<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugasans', function (Blueprint $table) {
            $table->id();
            $table->string('tajuk', 30);
            $table->string('petugas', 30);
            $table->string('kerja', 255);
            $table->string('tarikh', 15);
            $table->string('tahap', 15);
            $table->string('status', 15);
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
        Schema::dropIfExists('tugasans');
    }
}
