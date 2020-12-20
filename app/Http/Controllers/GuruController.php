<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = Guru::latest()->get();
        return view('pages.guru.guru', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.guru.guruTambah');
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
            'nama' => 'required',
            'nik' => 'required',
        ]);

        Guru::create($request->all());

        return redirect()->route('guru')
            ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit($id_guru)
    {
        $gurus =  Guru::where('id_guru', $id_guru)->get();
        return view('pages.guru.guruEdit', ['gurus' => $gurus]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
        ]);
        Guru::where('id_guru', $request->id_guru)->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ibu_kandung' => $request->nama_ibu_kandung,
            'jenis_ptk' => $request->jenis_ptk,
            'status_pegawai' => $request->status_pegawai,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'no_sk' => $request->no_sk,
            'nuptk' => $request->nuptk,
            'email' => $request->email
        ]);
        return redirect()->route('guru')
            ->with('success', 'Project created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_guru)
    {
        Guru::where('id_guru', $id_guru)->delete();
        return redirect()->route('guru')->with('success', 'Guru berhasil dihapus');
    }
}
