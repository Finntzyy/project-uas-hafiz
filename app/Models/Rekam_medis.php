<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekam_medis extends Model
{
    use HasFactory;
    protected $table = "tb_rekam_medis";
    protected $primaryKey = "rm_id";
    protected $fillable = ['rm_id_pasien', 'rm_id_dok', 'diagnosa', 'rm_id_obat', 'tgl_pemeriksaan'];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'rm_id_dok', 'dok_id');
    }
    public function obat()
    {
        return $this->belongsTo(Obat::class, 'rm_id_obat', 'obat_id');
    }
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'rm_id_pasien', 'pasien_id');
    }
    protected $guarded = [];
}

