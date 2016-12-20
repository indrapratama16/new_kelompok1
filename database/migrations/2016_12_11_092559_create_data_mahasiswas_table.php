<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_mahasiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim')->unique();
            $table->string('nama');
            $table->integer('semester');
            $table->timestamps();
            $table->softDeletes();


            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unsignedInteger('prodi_id');
            $table->foreign('prodi_id')->references('id')->on('prodis')
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
        Schema::drop('data_mahasiswas');
    }
}
