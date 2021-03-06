<?php

namespace App\Http\Controllers;

use App\Rombel;
use App\SarprasRuang;
use App\Siswa;
use App\TenagaPendidik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RombelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $number = 1;
        $datas = Rombel::with('guru', 'sarpras')->latest()->get();
        return view('pages.rombel.index', compact('number','datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Rombel $rombel)
    {
        $gurus = TenagaPendidik::where('jenis_tendik', 'gtk')->get();
        $ruangs = SarprasRuang::where('jenis_prasarana', 'ruang kelas/teori')->get();
        return view('pages.rombel.rombelTambah', ['gurus' => $gurus, 'ruangs' => $ruangs]);
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
            'nama_rombel' => 'required',
            'id_tenaga_pendidik' => 'required',
            'tahun_ajaran' => 'required'
        );

        $data = [
            'tingkat_pendidikan' => $request->tingkat_pendidikan,
            'kurikulum' => $request->kurikulum,
            'nama_rombel' => $request->nama_rombel,
            'id_tenaga_pendidik' => $request->id_tenaga_pendidik,
            'id_sarpras' => $request->id_sarpras,
            'tahun_ajaran' => $request->tahun_ajaran
        ];

        $validator = Validator::make($data, $rules);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect()->route('rombel.tambah')->withErrors($errors)->withInput($request->all());
        } else{
            Rombel::create($data);
            return redirect()->route('rombel')
                ->with('success', 'Kelas berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $number = 1;
        $data = Rombel::where('id', $id)->get()->first();
        $siswas = Siswa::where(['tingkat_kelas_saat_ini' => $data->tingkat_pendidikan, 'id_rombel' => null])->get();
        $siswaInRombels = Siswa::where('id_rombel', $id)->get();
        return view('pages.rombel.rombelLihat', ['number' => $number, 'data' => $data, 'siswas' => $siswas, 'siswaInRombels' => $siswaInRombels]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  Rombel::where('id', $id)->with('guru', 'sarpras')->get()->first();
        $gurus = TenagaPendidik::where('jenis_tendik', 'gtk')->get();
        $ruangs = SarprasRuang::where('jenis_prasarana', 'ruang kelas/teori')->get();
        return view('pages.rombel.rombelEdit', ['data' => $data, 'gurus' => $gurus, 'ruangs' => $ruangs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rombel $rombel)
    {
        $rules = array(
            'nama_rombel' => 'required',
            'id_tenaga_pendidik' => 'required',
            'tahun_ajaran' => 'required'
        );

        $data = [
            'tingkat_pendidikan' => $request->tingkat_pendidikan,
            'kurikulum' => $request->kurikulum,
            'nama_rombel' => $request->nama_rombel,
            'id_tenaga_pendidik' => $request->id_tenaga_pendidik,
            'id_sarpras' => $request->id_sarpras,
            'tahun_ajaran' => $request->tahun_ajaran
        ];

        $validator = Validator::make($data, $rules);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect()->route('rombel.edit', $request->id)->withErrors($errors)->withInput($request->all());
        } else{
            Rombel::where('id', $request->id)->update($data);
            return redirect()->route('rombel')
                ->with('success', 'Kelas berhasil diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rombel  $rombel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rombel::where('id', $id)->delete();
        return redirect()->route('rombel')->with('success', 'Rombel berhasil dihapus');
    }

    public function siswaPindah(Request $request)
    {
        foreach ($request->id as $key => $value) {
            Siswa::where('id', $value)->update([
                'id_rombel' => $request->id_rombel
            ]);
        }
        return redirect()->route('rombel.lihat', $request->id_rombel)->with('success', 'Siswa berhasil dipindahkan');
    }

    public function siswaKeluar(Request $request)
    {
        foreach ($request->id as $key => $value) {
            Siswa::where('id', $value)->update([
                'id_rombel' => null
            ]);
        }
        return redirect()->route('rombel.lihat', $request->id_rombel)->with('success', 'Siswa berhasil dikeluarkan');
    }
}
