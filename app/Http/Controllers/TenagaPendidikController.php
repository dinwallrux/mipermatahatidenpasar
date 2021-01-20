<?php

namespace App\Http\Controllers;

use App\Rombel;
use App\TenagaPendidik;
use Illuminate\Http\Request;

class TenagaPendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($jenis_tendik)
    {
        // Passing Data
        $number = 1;
        $datas = TenagaPendidik::with('rombel')->latest()->first()->where('jenis_tendik', $jenis_tendik)->get();
        return view('pages.tenagaPendidik.index', ['number' => $number, 'datas' => $datas, 'jenis_tendik' => $jenis_tendik]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($jenis_tendik)
    {
        $rombels = Rombel::all();
        return view('pages.tenagaPendidik.tenagaPendidikTambah', compact('jenis_tendik', 'rombels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $jenis_tendik)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        TenagaPendidik::create($request->all());

        return redirect()->route('tenagaPendidik', $jenis_tendik)->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TenagaPendidik  $tenagaPendidik
     * @return \Illuminate\Http\Response
     */
    public function show($jenis_tendik, $id)
    {
        $data = TenagaPendidik::where('id', $id)->get()->first();
        return view('pages.tenagaPendidik.tenagaPendidikLihat', compact('data', 'jenis_tendik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TenagaPendidik  $tenagaPendidik
     * @return \Illuminate\Http\Response
     */
    public function edit($jenis_tendik, $id)
    {
        $rombels = Rombel::all();
        $datas =  TenagaPendidik::where('id', $id)->get();
        return view('pages.tenagaPendidik.tenagaPendidikEdit', ['jenis_tendik' => $jenis_tendik, 'datas' => $datas, 'rombels' => $rombels]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TenagaPendidik  $tenagaPendidik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
        ]);
        TenagaPendidik::where('id', $request->id)->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'jenis_tendik' => $request->jenis_tendik,
            'status_pegawai' => $request->status_pegawai,
            'nip' => $request->nip,
            'nuptk' => $request->nuptk,
            'jenis_ptk' => $request->jenis_ptk,
            'sk_pengangkatan' => $request->sk_pengangkatan,
            'tmt_pengangkatan' => $request->tmt_pengangkatan,
            'lembaga_pengangkat' => $request->lembaga_pengangkat,
            'sk_cpns' => $request->sk_cpns,
            'tmt_cpns' => $request->tmt_cpns,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'id_rombel' => $request->id_rombel,
            'status' => $request->status
        ]);
        return redirect()->route('tenagaPendidik', $request->jenis_tendik)
            ->with('success', 'Project created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TenagaPendidik  $tenagaPendidik
     * @return \Illuminate\Http\Response
     */
    public function destroy($jenis_tendik, $id)
    {
        TenagaPendidik::where('id', $id)->delete();
        return redirect()->route('tenagaPendidik', $jenis_tendik)->with('success', 'Tenaga Pendidik berhasil dihapus');
    }
}
