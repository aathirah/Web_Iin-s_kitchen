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
        Schema::create('tbl_pelanggan', function (Blueprint $table) {
            $table->bigIncrements('id_pelanggan');
            $table->string('nm_pelanggan');
            $table->text('alamat');
            $table->string('no_hp');
            $table->text('gambar');
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
        Schema::dropIfExists('tbl_pelanggan');
    }
};
