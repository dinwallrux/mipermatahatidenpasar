<?php

namespace App\Http\Controllers;

use App\SarprasRuang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $rules = array(
            'jenis_prasarana' => 'required',
            'nama_ruang' => 'required',
        );

        $data = [
            'jenis_prasarana' => $request->jenis_prasarana,
            'nama_ruang' => $request->nama_ruang,
            'lantai_ke' => $request->lantai_ke,
            'jumlah_ruangan' => $request->jumlah_ruangan,
            'kapasitas' => $request->kapasitas
        ];

        $validator = Validator::make($data, $rules);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect()->route('sarpras.ruang.tambah')->withErrors($errors)->withInput($request->all());
        } else{
            SarprasRuang::create($data);
            return redirect()->route('sarpras.ruang')
                ->with('success', 'Ruang berhasil ditambahkan');
        }
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
        $rules = array(
            'jenis_prasarana' => 'required',
            'nama_ruang' => 'required',
        );

        $data = [
            'jenis_prasarana' => $request->jenis_prasarana,
            'nama_ruang' => $request->nama_ruang,
            'lantai_ke' => $request->lantai_ke,
            'jumlah_ruangan' => $request->jumlah_ruangan,
            'kapasitas' => $request->kapasitas
        ];

        $validator = Validator::make($data, $rules);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect()->route('sarpras.ruang.edit', $request->id)->withErrors($errors)->withInput($request->all());
        } else{
            SarprasRuang::where('id', $request->id)->update($data);
            return redirect()->route('sarpras.ruang')
                ->with('success', 'Ruang berhasil diubah');
        }
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
