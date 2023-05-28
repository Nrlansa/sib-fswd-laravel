<?php

namespace App\Models\produk;

use App\Models\produk\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lproduk extends Model
{
    protected $table = 'produk';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id');
    }
}
