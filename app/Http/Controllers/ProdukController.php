<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Tambahan
use App\Models\Produk; // Memanggil Model
use App\Models\Jenis; // Memanggil Model
use App\Models\Penjual; // Memanggil Model
use DB;
use PDF;
use App\Exports\ProdukExport;
use Maatwebsite\Excel\Facades\Excel;


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $produk = Produk::all();
        // return view('produk.index',compact('produk'));
        $produk = Produk::orderBy('id', 'DESC')->get();
        return view('produk.index',compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ambil master untuk dilooping di select option
        $ar_jenis = Jenis::all();
        $ar_penjual = Penjual::all();
        
        //arahkan ke form input data
        return view('produk.form',compact('ar_jenis','ar_penjual'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //proses input pegawai
         $request->validate([
            'nama' => 'required|max:45',
            'jenis_id' => 'required|integer',
            'Stok' => 'required|integer',
            'Harga' => 'required|integer',
            'Penjual_id' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
      
        // Produk::create($request->all());
        //Pegawai::create($request->all());
        //------------apakah user  ingin upload foto-----------
        if(!empty($request->foto)){
            $fileName = 'foto-'.$request->nama.'.'.$request->foto->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->foto->move(public_path('admin/img'),$fileName);
        }
        else{
            $fileName = '';
        }

        //lakukan insert data dari request form
        DB::table('produk')->insert(
            [
                'nama'=>$request->nama,
                'jenis_id'=>$request->jenis_id,
                'Stok'=>$request->Stok,
                'Harga'=>$request->Harga,
                'Penjual_id'=>$request->Penjual_id,
                'foto'=>$fileName,
                'created_at'=>now(),
            ]);
       
        return redirect()->route('produk.index')
                        ->with('success','Data Produk Baru Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Produk::find($id);
        return view('produk.detail',compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Produk::find($id);
        return view('produk.form_edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //proses input pegawai
         $request->validate([
            'nama' => 'required|max:45',
            'jenis_id' => 'required|integer',
            'Stok' => 'required|integer',
            'Harga' => 'required|integer',
            'Penjual_id' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        //------------foto lama apabila user ingin ganti foto-----------
        $foto = DB::table('produk')->select('foto')->where('id',$id)->get();
        foreach($foto as $f){
            $namaFileFotoLama = $f->foto;
        }

        //------------apakah user ingin ganti foto lama-----------
        if(!empty($request->foto)){
            //jika ada foto lama, hapus foto lamanya terlebih dahulu
            if(!empty($row->foto)) unlink('admin/img/'.$row->foto);
            //proses foto lama ganti foto baru
            $fileName = 'foto-'.$request->nama.'.'.$request->foto->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->foto->move(public_path('admin/img'),$fileName);
        }

        //------------tidak berniat ganti ganti foto lama-----------
        else{
            $fileName = $namaFileFotoLama;
        }

        //lakukan update data dari request form edit
        DB::table('produk')->where('id',$id)->update(
            [
                'nama'=>$request->nama,
                'jenis_id'=>$request->jenis_id,
                'Stok'=>$request->Stok,
                'Harga'=>$request->Harga,
                'Penjual_id'=>$request->Penjual_id,
                'foto'=>$fileName,
                'created_at'=>now(),
            ]);
            return redirect()->route('produk.index')
            ->with('success','Data Produk Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Sebelum Hapus Data, hapus terlebih dahulu fisik file fotonya
        $row = Produk::find($id);
        //Setelah Itu Baru hapus data
        if(!empty($row->foto)) unlink('public/admin/img/'.$row->foto);
        Produk::where('id',$id)->delete();
        return redirect()->route('produk.index')
                         ->with('success','Data Produk Berhasil Dihapus');
    }

    public function produkPDF()
    {
        $produk = Produk::all(); 
        //dd($pegawai);
        $pdf = PDF::loadView('produk.produkPDF',['produk'=>$produk]);
        return $pdf->download('data_produk.pdf');
    }

    public function produkExcel() 
    {
        return Excel::download(new ProdukExport, 'data_produk.xlsx');
    }

    public function liquid()
    {
        //return Produk::all();
        $ar_Produk = DB::table('Produk')
        ->join('penjual', 'penjual.id', '=', 'Produk.Penjual_id')
        ->join('jenis', 'jenis.id', '=', 'Produk.jenis_id')
        ->select('Produk.nama','jenis.nama_jenis','Produk.Stok','Produk.Harga',
                'penjual.name','penjual.alamat',)
        ->where('jenis_id','1')
        ->get();
        return $ar_Produk;
    }

}