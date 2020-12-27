<?php

namespace App\Http\Controllers;

use App\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    // Redirect to login if user haven't login
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Informasi::latest()->get();
        return view('pages.manajemenInformasi.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.manajemenInformasi.infoTambah');
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
            'judul' => 'required',
            'isi' => 'required',
        ]);

        // Tambah Excerpt Untuk limit text di index.blade.php
        $pagebreak = '<!-- pagebreak -->';
        $excerpt = substr($request->isi, 0, strpos($request->isi, $pagebreak));

        $formData = [
            'judul' => $request->judul,
            'isi' => $request->isi,
            'excerpt' => $excerpt
        ];

        Informasi::create($formData);

        return redirect()->route('info')->with('success', 'Informasi Berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Informasi::where('id', $id)->get()->first()->getOriginal();
        return view('pages.manajemenInformasi.infoLihat', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas =  Informasi::where('id', $id)->get();
        return view('pages.manajemenInformasi.infoEdit', ['datas' => $datas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        // Update excerpt nya
        $pagebreak = '<!-- pagebreak -->';
        $excerpt = substr($request->isi, 0, strpos($request->isi, $pagebreak));

        Informasi::where('id', $request->id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'excerpt' => $excerpt
        ]);
        return redirect()->route('info')
            ->with('success', 'Informasi berhasil di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Informasi::where('id', $id)->delete();
        return redirect()->route('info')->with('success', 'Informasi berhasil dihapus');
    }
}
