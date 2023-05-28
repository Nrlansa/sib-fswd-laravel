<?php

namespace App\Models\produk;

use App\Models\produk\Lproduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    protected $table = 'categories';


    public function Lproduk()
    {
        return $this->hasMany(Lproduk::class, 'id');
    }
}
