<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    public $timestamps = false;
    protected $table = 'jurnal_tanaman';
    use HasFactory;
    protected $fillable = [
        'id',
        'tanaman_id',
        'stok_terbaru',
        'type',
        'keterangan',
        'harga_terbaru',
    ];

    public function tanaman()
  {
    return $this->belongsTo(Tanaman::class);
  }
}
