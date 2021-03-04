<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Kategori;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $number = 1;
        $datas = Galeri::with('kategori')->latest()->get();
        return view('pages.galeri.index', compact('number','datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('pages.galeri.galeriTambah', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'image' => 'required',
            'nama_foto' => 'required',
        );

        if($request->hasFile('image')){
            // Ganti nama file dan simpan di storage
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $path_image = $request->file('image')->storeAs('public', $new_name);
        } else{
            $path_image = null;
        }

        $data = [
            'image' => $path_image,
            'nama_foto' => $request->nama_foto,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori
        ];

        $validator = Validator::make($data, $rules);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect()->route('galeri.tambah')->withErrors($errors)->withInput($request->all());
        } else{
            Galeri::create($data);
            return redirect()->route('galeri')
                ->with('success', 'Galeri berhasil ditambahkan');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategoris = Kategori::all();
        $datas =  Galeri::where('id', $id)->get();
        return view('pages.galeri.galeriEdit', compact('datas', 'kategoris'));
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
        $rules = array(
            'image' => 'required',
            'nama_foto' => 'required',
        );

        // Ngambil gambar lama
        $oldPhoto = Galeri::where('id', $request->id)->first()->getOriginal('image');
        
        // Check apakah ada gambar baru yg mau di update
        if($request->hasFile('image')){
            // Ganti nama dan Simpan gambar di storage
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $path_image = $request->file('image')->storeAs('public', $new_name);

            // Hapus gambar yg lama
            Storage::delete($oldPhoto);
        } else {
            $path_image = $oldPhoto;
        }

        $data = [
            'image' => $path_image,
            'nama_foto' => $request->nama_foto,
            'deskripsi' => $request->deskripsi,
            'id_kategori' => $request->id_kategori
        ];

        $validator = Validator::make($data, $rules);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect()->route('galeri.edit', $request->id)->withErrors($errors)->withInput($request->all());
        } else{
            Galeri::where('id', $request->id)->update($data);
            return redirect()->route('galeri')
                ->with('success', 'Galeri berhasil diubah');
        }
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
