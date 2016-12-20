<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalMatakuliahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_matakuliahs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hari');
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedInteger('dosen_id');
            $table->foreign('dosen_id')->references('id')->on('data_dosens')
                ->onUpdatte('cascade')->onDelete('cascade');

            $table->unsignedInteger('matakuliah_id');
            $table->foreign('matakuliah_id')->references('id')->on('matakuliahs')
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
        Schema::drop('jadwal_matakuliahs');
    }
}
