<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    // Mapping Table
    protected $table ='produk';
    // Mapping ke kolom/fieldnya
    protected $fillable = ['nama','jenis_id','Stok','Harga','Penjual_id','foto'];


    // public function pelatihan()
    // {
    //     return $this->hasMany(Pelatihan::class);
    // }

    //relasi one to one ke tabel gaji
    // public function gaji()
    // {
    //     return $this->hasOne(Gaji::class);
    // }

    //tabel relasi merujuk/merefer ke tabel master/acuan
    public function jenis()
    {
        return $this->belongsTo(Jenis::class);
    }

    public function penjual()
    {
        // return $this->belongsTo(Penjual::class);
        return $this->belongsTo('App\Models\Penjual','Penjual_id');

    }
    

    
}
