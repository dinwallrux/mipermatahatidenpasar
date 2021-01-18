<?php

namespace App\Http\Controllers;

use App\SarprasRuang;
use Illuminate\Http\Request;

class SarprasRuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $number = 1;
        $datas = SarprasRuang::latest()->get();
        return view('pages.sarprasRuang.index', ['number' => $number,'datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.sarprasRuang.sarprasRuangTambah');
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
            'jenis_prasarana' => 'required',
            'nama_ruang' => 'required',
        ]);

        SarprasRuang::create($request->all());

        return redirect()->route('sarpras.ruang')->with('success', 'Ruangan Berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SarprasRuang  $sarprasRuang
     * @return \Illuminate\Http\Response
     */
    public function show(SarprasRuang $sarprasRuang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SarprasRuang  $sarprasRuang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas =  SarprasRuang::where('id', $id)->get();
        return view('pages.SarprasRuang.sarprasRuangEdit', ['datas' => $datas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SarprasRuang  $sarprasRuang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SarprasRuang $sarprasRuang)
    {
        $request->validate([
            'jenis_prasarana' => 'required',
            'nama_ruang' => 'required',
        ]);

        SarprasRuang::where('id', $request->id)->update([
            'jenis_prasarana' => $request->jenis_prasarana,
            'nama_ruang' => $request->nama_ruang,
            'lantai_ke' => $request->lantai_ke,
            'jumlah_ruangan' => $request->jumlah_ruangan,
            'kapasitas' => $request->kapasitas,
        ]);
        return redirect()->route('sarpras.ruang')
            ->with('success', 'Sarpras Ruang berhasil di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SarprasRuang  $sarprasRuang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SarprasRuang::where('id', $id)->delete();
        return redirect()->route('sarpras.ruang')->with('success', 'Sarpras Ruang berhasil dihapus');
    }
}
