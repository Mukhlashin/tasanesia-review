<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    public $timestamps = false;
    protected $table = 'outlet';
    use HasFactory;
    protected $fillable = [
        'id',
        'nama_outlet',
    ];
}
