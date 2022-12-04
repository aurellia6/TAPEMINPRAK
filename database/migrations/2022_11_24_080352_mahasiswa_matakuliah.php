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
        Schema::create('mahasiswa_matakuliah', function (Blueprint $table) {
            // $table->id();
            $table->foreignId('mhsNim')->unsigned();
            // $table->foreign('mhsNim')->references('nim')->on('mahasiswas');
            $table->foreignId('mkId')->unsigned();
            // $table->foreign('mkId')->references('id')->on('matakuliahs');
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
        Schema::dropIfExists('mahasiswa_matakuliah');
    }
};
