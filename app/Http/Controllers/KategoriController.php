<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $number = 1;
        $datas = Kategori::latest()->get();
        return view('pages.kategori.index', compact('number', 'datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kategori.kategoriTambah');
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
            'nama' => 'required',
        );

        $data = [
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama, '-'),
        ];

        $validator = Validator::make($data, $rules);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect()->route('kategori.tambah')->withErrors($errors)->withInput($request->all());
        } else{
            Kategori::create($data);
            return redirect()->route('kategori')
                ->with('success', 'Kategori berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  Kategori::where('id', $id)->get()->first();
        return view('pages.kategori.kategoriEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $rules = array(
            'nama' => 'required',
        );

        $data = [
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama, '-'),
        ];

        $validator = Validator::make($data, $rules);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect()->route('kategori.edit', $request->id)->withErrors($errors)->withInput($request->all());
        } else{
            Kategori::where('id', $request->id)->update($data);
            return redirect()->route('kategori')
                ->with('success', 'Kategori berhasil diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::where('id', $id)->delete();
        return redirect()->route('kategori')->with('success', 'Kategori berhasil dihapus');
    }
}
