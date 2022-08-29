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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('pemilik');
            $table->text('url');
            $table->string('alamat');
            $table->string('harga');
            $table->string('ukuran');
            $table->string('jenis');
            $table->string('kategori');
            $table->text('legalitas');
            $table->text('komposisi');
            $table->text('wa');
            $table->text('fb');
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
        Schema::dropIfExists('products');
    }
};
