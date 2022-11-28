<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;
    // Mapping Table
    protected $table ='penjual';
    // Mapping ke kolom/fieldnya
    protected $fillable = ['name', 'no_telp', 'alamat'];

    // relasi one to many table produk
    public function produk(){
        return $this->hasMany(Produk::class);
    }
}
