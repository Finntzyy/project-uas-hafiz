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
        Schema::create('tb_rekam_medis', function (Blueprint $table) {
            $table->mediumIncrements('rm_id');
            $table->unsignedMediumInteger('rm_id_pasien');
            $table->unsignedMediumInteger('rm_id_dok');
            $table->text('diagnosa');
            $table->unsignedMediumInteger('rm_id_obat');
            $table->string('tgl_pemeriksaan', 30);
            $table->foreign('rm_id_pasien')->references('pasien_id')->on('tb_pasien')->onUpdate('Cascade');
            $table->foreign('rm_id_dok')->references('dok_id')->on('tb_dokter')->onUpdate('Cascade');
            $table->foreign('rm_id_obat')->references('obat_id')->on('tb_obat')->onUpdate('Cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_rekam_medis');
    }
};
