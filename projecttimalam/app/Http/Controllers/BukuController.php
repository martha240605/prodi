<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BukuController extends Controller
{
    public function index()
    {
        $data['buku'] = Buku::all();
        return view('buku.index', $data);
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'isbn'=> 'required',
            'judul' => 'required',
            'tahun' => 'required',  
            'penerbit' => 'required', 
            'penulis' => 'required',
            'cover' => 'required'
        ]);
        $cover = $request->file('cover');
        $coverName = $cover->hashName();
        $request->cover->move(public_path('/cover'), $coverName);
        Buku::create([
            'isbn' => $request->isbn,
            'judul' => $request->judul, 
            'tahun' => $request->tahun, 
            'penulis' => $request->penulis, 
            'penerbit' => $request->penerbit, 
            'cover' => $coverName
        ]);
        return redirect()->route('buku.index');

     }

    public function show(string $id)
    {

    }

    public function edit(string $id)
    {
         $data['buku'] = Buku::find($id); 
        return view('buku.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'isbn' => 'required', 
            'judul' => 'required',
            'tahun' => 'required',
            'penerbit' => 'required', 
            'penulis' => 'required'
        ]);
        $buku = Buku::find($id);
        $buku->update([
            'isbn' => $request->isbn,
            'judul' => $request->judul,
            'tahun' => $request->tahun,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
        ]);
        return redirect()->route('buku.index');
    }
    public function destroy(string $id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        unlink(public_path('cover/' . $buku->cover)); 
        return redirect()->route('buku.index');
    }
}

