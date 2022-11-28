<?php
namespace App\Http\Controllers;
use App\Models\Produk;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $ar_stok = DB::table('produk')->select('nama','Stok')->get();
        
        //return Produk::all();
        $ar_jen = DB::table('produk')
        ->join('jenis', 'jenis.id', '=', 'produk.jenis_id')
        ->selectRaw('nama_jenis,count(nama_jenis) as jumlah')
        ->groupBy('nama_jenis')
        ->get();
        
        return view('dashboard.index', compact('ar_stok','ar_jen'));
    }
}
