<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;


class BarangController extends Controller
{
    public function create()
    {
        $barangs = Barang::all();
        return [
            "message" => "sukses menampilkan data",
            "data" => $barangs
        ];
        
    }

    public function store(Request $request)
    {
        
        $barang = new Barang;
        $barang->namaBarang = $request->namaBarang;
        $barang->deskripsiBarang = $request->deskripsiBarang;
        $barang->harga = $request->harga;
        if ($request->namaBarang=="" || $request->deskripsiBarang=="" || $request->harga=="") {

            return response()->json([
               'message' => 'data tidak boleh kosong',
               'status' => 400,    
            ]);
       } else  $barang->save(); {
           return response()->json([
               'message' => 'berhasil menambahkan data',
               'status' => 200,
               'data' => $barang
           ]);
       }
       
    
}

    public function edit($id)
{
    $barangs = Barang::find($id);
   
    return view('edit', compact('barangs'));
}

public function update(Request $request, $id)
{
    $barangs = Barang::find($id);
    $barangs->namaBarang = $request->namaBarang;
    $barangs->deskripsiBarang = $request->deskripsiBarang;
    $barangs->harga = $request->harga;
    $barang->deskripsiBarang = $request->deskripsiBarang;
        $barang->harga = $request->harga;
        if ($request->namaBarang=="" || $request->deskripsiBarang=="" || $request->harga=="") {

            return response()->json([
               'message' => 'data tidak boleh kosong',
               'status' => 400,    
            ]);
       } else {
           return response()->json([
               'message' => 'berhasil mengubah data',
               'status' => 200,
               'data' => $barang
           ]);
       }
      
}
public function destroy($id)
{
    $barang = Barang::find($id);
    if ($id ==""){
        return response()->json([
            'message' => 'id tidak ditemukan',
            'status' => 400,
            
        ]);
    } else {
        return response()->json([
            'message' => 'berhasil menghapus product',
            'status' => 200,
            
        ]);
    }
    $barang->delete();
  
}

}
