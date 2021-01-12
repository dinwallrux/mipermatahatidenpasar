<?php

namespace App\Http\Controllers;

use App\Rombel;
use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{

    public function index()
    {
        $siswas = Siswa::with('rombel')->latest()->get();
        return view('pages.siswa.siswa', compact('siswas'));
    }

    public function formTambah()
    {
        $rombels = Rombel::all();
        return view('pages.siswa.siswaTambah', compact('rombels'));
    }
    
    public function prosesTambah(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'nik' => 'required',
            'nama_ibu' => 'required'
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa')
            ->with('success', 'Project created successfully.');
    }

    public function prosesHapus($id)
    {
        Siswa::where('id', $id)->delete();
        return redirect()->route('siswa')->with('success', 'Siswa berhasil dihapus');
    }

    public function formEdit($id)
    {
        $siswas =  Siswa::where('id', $id)->get();
        $rombels = Rombel::all();
        return view('pages.siswa.siswaEdit', ['siswas' => $siswas, 'rombels' => $rombels]);
    }

    public function prosesEdit(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'nik' => 'required',
            'nama_ibu' => 'required'
        ]);
        Siswa::where('id', $request->id)->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nisn' => $request->nisn,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tingkat_kelas_saat_ini' => $request->tingkat_kelas_saat_ini,
            'id_rombel' => $request->id_rombel,
            'tanggal_masuk' => $request->tanggal_masuk,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu
        ]);
        return redirect()->route('siswa')
            ->with('success', 'Project created successfully.');
    }
}
