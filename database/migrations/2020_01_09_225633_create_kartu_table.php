<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('no_kk');
            $table->integer('nik');
            $table->text('alamat');
            $table->string('agama');
            $table->integer('nomer');
            $table->string('jenis_kelamin');
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
        Schema::dropIfExists('kartu');
    }
}
