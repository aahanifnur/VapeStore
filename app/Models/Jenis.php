<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;
    // Mapping Table
    protected $table ='jenis';
    // Mapping ke kolom/fieldnya
    protected $fillable = ['nama_jenis'];

    // relasi one to many table produk
    public function produk(){
        return $this->hasMany(Produk::class);
    }
}
