<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangContol extends Controller
{
    public function create()
    {
       return view('barang');
    }

    public function store(Request $request)
    {
        
        $barang = new Barang;
        $barang->namaBarang = $request->namaBarang;
        $barang->deskripsiBarang = $request->deskripsiBarang;
        $barang->harga = $request->harga;
        $barang->save();
        return view('index', compact(['barang']));
    
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

