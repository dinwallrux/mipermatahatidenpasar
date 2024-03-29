<?php

namespace App\Http\Controllers;

use App\ProfilSekolah;
use App\TenagaPendidik;
use App\Siswa;
use Illuminate\Http\Request;

class ProfilSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProfilSekolah::latest()->get()->first();
        $jumlahGuru = TenagaPendidik::where('jenis_tendik', 'gtk')->get()->count();
        $jumlahSiswaLaki = Siswa::where('jenis_kelamin', 'L')->get()->count();
        $jumlahSiswaPerempuan = Siswa::where('jenis_kelamin', 'P')->get()->count();
        return view('pages.profilSekolah.index', ['data' => $data, 'jumlahGuru' => $jumlahGuru, 'jumlahSiswaLaki' => $jumlahSiswaLaki, 'jumlahSiswaPerempuan' => $jumlahSiswaPerempuan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProfilSekolah  $profilSekolah
     * @return \Illuminate\Http\Response
     */
    public function show(ProfilSekolah $profilSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProfilSekolah  $profilSekolah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  ProfilSekolah::where('id', $id)->get()->first();
        return view('pages.profilSekolah.profilEdit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfilSekolah  $profilSekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfilSekolah $profilSekolah)
    {
        $request->validate([
            'nama_sekolah' => 'required',
            'kepala_sekolah' => 'required',
            'npsn' => 'required|min:8|max:8'
        ]);

        ProfilSekolah::where('id', $request->id)->update([
            'nama_sekolah' => $request->nama_sekolah,
            'npsn' => $request->npsn,
            'alamat' => $request->alamat,
            'status_sekolah' => $request->status_sekolah,
            'akreditasi' => $request->akreditasi,
            'kurikulum' => $request->kurikulum,
            'kepala_sekolah' => $request->kepala_sekolah,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'deskripsi' => $request->deskripsi,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email
        ]);
        return redirect()->route('profil')
            ->with('success', 'Profil Sekolah berhasil di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfilSekolah  $profilSekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfilSekolah $profilSekolah)
    {
        //
    }
}
