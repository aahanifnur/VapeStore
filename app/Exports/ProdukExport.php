<?php

namespace App\Exports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class ProdukExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Produk::all();
        $ar_Produk = DB::table('produk')
        ->join('penjual', 'penjual.id', '=', 'produk.Penjual_id')
        ->join('jenis', 'jenis.id', '=', 'produk.jenis_id')
        ->select('produk.nama','jenis.nama_jenis','produk.Stok','produk.Harga',
                'penjual.name','penjual.alamat',)
        ->get();
        return $ar_Produk;
    }

    public function headings(): array
    {
        return ["Nama", "Kategori","Stok","Harga",
                "Distributor","Alamat"];
    }
}
