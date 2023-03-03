<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangContol extends Controller
{
    public function count()
    {
        $count = Barang::count();

    
    }
    public function create()
    {
       return view('barang');
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'judulProduk' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|max:2048',
        ]);

        // Simpan gambar
        $gambarPath = $request->file('gambar')->store('public/images');

        // Buat produk baru
        $barang = new Barang;
        $barang->judulProduk = $request->input('judulProduk');
        $barang->deskripsi = $request->input('deskripsi');
        $barang->harga = $request->input('harga');
        $barang->gambar = $gambarPath;
        $barang->save();

        // Redirect ke halaman daftar produk
        return redirect('index');
}

    public function edit($id)
{
    $barangs = Barang::find($id);
   
    return view('edit', compact('barangs'));
}

public function update(Request $request, $id)
{
    $barangs = Barang::find($id);
    $barangs->judulProduk = $request->judulProduk;
    $barangs->deskripsi = $request->deskripsi;
    $barangs->harga = $request->harga;
    $barangs->save();
    return redirect('index');
      
}
public function destroy($id)
{
    $barang = Barang::find($id);
    if ($id ==""){
        return response()->json([
            'message' => 'id tidak ditemukan',
            'status' => 400,
            
        ]);
        $barang->delete();
    } else   $barang->delete();{
        return response()->json([
            'message' => 'berhasil menghapus product',
            'status' => 200,
            
        ]);
    }
  
  
}

}

