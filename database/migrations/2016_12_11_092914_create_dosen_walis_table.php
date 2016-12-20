<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosenWalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosen_walis', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedInteger('dosen_id');
            $table->foreign('dosen_id')->references('id')->on('data_dosens')
                ->onUpdatte('cascade')->onDelete('cascade');

            $table->unsignedInteger('mahasiswa_id');
            $table->foreign('mahasiswa_id')->references('id')->on('data_mahasiswas')
                ->onUpdatte('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dosen_walis');
    }
}
