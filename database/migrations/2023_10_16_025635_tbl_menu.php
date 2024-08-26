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
        Schema::create('tbl_menu', function (Blueprint $table) {
            $table->bigIncrements('id_menu');
            $table->text('gambar');
            $table->string('nama_menu');
            $table->double('harga', 15, 8);
            $table->enum("stok", ["available", "unavailable"]);
            $table->text('ket');

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
        Schema::dropIfExists('tbl_menu');
    }
};
