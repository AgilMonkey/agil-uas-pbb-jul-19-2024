<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('alamat');
            $table->unsignedBigInteger('provinsi_id');
            $table->unsignedBigInteger('negara_id');
            $table->string('kode_pos');
            $table->string('handphone');
            $table->string('captcha');
            $table->timestamps();

            $table->foreign('provinsi_id')->references('id')->on('provinsis');
            $table->foreign('negara_id')->references('id')->on('negaras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
