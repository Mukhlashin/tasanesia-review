<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    public $timestamps = false;
    protected $table = 'tanaman';
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_produk',
        'foto_produk',
        'outlet_id',
        'kategori_id',
        'deskripsi',
        'jumlah_stok',
        'kodefikasi',
        'angkatan',
        'jumlah_tanaman_seangkatan',
        'jumlah_daun',
        'varian_tanaman',
        'tinggi_daun',
        'kondisi_tanaman',
        'harga',
        'harga_grosir',
        'harga_amerika',
        'asal_tanaman',
        'produsen',
        'nama_produsen',
    ];

    public function jurnal()
  {
    return $this->hasMany(Jurnal::class);
  }

  public function outlet()
  {
    return $this->belongsTo(Outlet::class);
  }

  public function tanaman()
  {
    return $this->belogsTo(Tanaman::class);
  }
}
