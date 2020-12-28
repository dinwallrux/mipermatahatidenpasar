<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.galeri.galeriTambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'nama_foto' => 'required',
        ]);
        
        // Ganti nama file dan simpan di storage
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $path_image = $request->file('image')->storeAs('public', $new_name);

        $galleries = [
            'image' => $path_image,
            'nama_foto' => $request->nama_foto,
            'kategori' => $request->kategori
        ];

        Galeri::create($galleries);

        return redirect()->route('galeri')->with('success', 'Galeri Berhasil ditambahkan.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        $datas = Galeri::latest()->get();
        return view('pages.galeri.index', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas =  Galeri::where('id', $id)->get();
        return view('pages.galeri.galeriEdit', ['datas' => $datas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'image' => 'required',
            'nama_foto' => 'required',
        ]);

        // Hapus gambar yg lama
        $oldPhoto = Galeri::where('id', $request->id)->first()->getOriginal('image');
        Storage::delete($oldPhoto);

        // Ganti nama dan Simpan gambar di storage
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $path_image = $request->file('image')->storeAs('public', $new_name);

        Galeri::where('id', $request->id)->update([
            'image' => $path_image,
            'nama_foto' => $request->nama_foto,
            'kategori' => $request->kategori
        ]);
        return redirect()->route('galeri')
            ->with('success', 'Sarpras Ruang berhasil di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Delete image yg di storage
        $galeriName = Galeri::where('id', $id)->first()->getOriginal('image');
        Storage::delete($galeriName);
        
        Galeri::where('id', $id)->delete();
        return redirect()->route('galeri')->with('success', 'Foto galeri berhasil dihapus');
    }
}
