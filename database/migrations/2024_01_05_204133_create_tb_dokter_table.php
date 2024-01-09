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
        Schema::create('tb_dokter', function (Blueprint $table) {
            $table->mediumIncrements('dok_id');
            $table->string('dok_nama', 100);
            $table->string('spesialis', 50);
            $table->text('alamat');
            $table->string('no_telp', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_dokter');
    }
};
