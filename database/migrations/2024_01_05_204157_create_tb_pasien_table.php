<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_pasien', function (Blueprint $table) {
            $table->mediumIncrements('pasien_id');
            $table->string('pasien_nama', 100);
            $table->enum('jk', ['Pria', 'Wanita'])->default('Pria');
            $table->string('no_telp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pasien');
    }
};
