<?php

namespace App\Http\Controllers;

use App\Informasi;
use Auth;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Auth::user()->status;
        if($role == 'pengguna'){
            $datas = Informasi::where(['publish' => 1, 'jenis_pengumuman' => 'siswa'])->latest()->get();
        } elseif($role != 'operator'){
            $datas = Informasi::where(['publish' => 1])->latest()->get();
        } else{
            $datas = Informasi::latest()->get();
        }

        return view('pages.manajemenInformasi.index', compact('datas', 'role'));
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
            'jenis_pengumuman' => 'required',
            'isi' => 'required',
        ]);

        // Tambah Excerpt Untuk limit text di index.blade.php
        $pagebreak = '<!-- pagebreak -->';
        if(!isset($pagebreak)){
            $excerpt = substr($request->isi, 0, strpos($request->isi, $pagebreak));
        } else{
            $excerpt = $request->isi;
        }

        $formData = [
            'judul' => $request->judul,
            'jenis_pengumuman' => $request->jenis_pengumuman,
            'isi' => $request->isi,
            'excerpt' => $excerpt,
            'publish' => $request->has('publish')
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
        $role = Auth::user()->status;
        $data = Informasi::where('id', $id)->get()->first()->getOriginal();
        return view('pages.manajemenInformasi.infoLihat', compact('data', 'role'));
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
            'jenis_pengumuman' => 'required',
            'isi' => 'required',
        ]);

        // Update excerpt nya
        $pagebreak = '<!-- pagebreak -->';
        if(!isset($pagebreak)){
            $excerpt = substr($request->isi, 0, strpos($request->isi, $pagebreak));
        } else{
            $excerpt = $request->isi;
        }

        Informasi::where('id', $request->id)->update([
            'judul' => $request->judul,
            'jenis_pengumuman' => $request->jenis_pengumuman,
            'isi' => $request->isi,
            'excerpt' => $excerpt,
            'publish' => $request->has('publish') // Untuk checkbox(Boolean value)
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
