<?php

namespace App\Http\Controllers;

use App\Rombel;
use Illuminate\Http\Request;
use App\Siswa;
use Illuminate\Support\Facades\Validator;

class SiswaController extends Controller
{

    public function index()
    {
        $number = 1;
        $datas = Siswa::with('rombel')->latest()->get();
        return view('pages.siswa.index', compact('number','datas'));
    }

    public function show($id){
        $data = Siswa::with('rombel')->find($id);
        return view('pages.siswa.siswaLihat', compact('data'));
    }

    public function formTambah()
    {
        $rombels = Rombel::all();
        return view('pages.siswa.siswaTambah', compact('rombels'));
    }
    
    public function prosesTambah(Request $request)
    {
        $rules = array(
            'nama' => 'required',
            'nis' => 'required',
            'nisn' => 'required|max:10',
            'alamat' => 'required',
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect()->route('siswa.tambah')->withErrors($errors)->withInput($request->all());
        } else{
            Siswa::create($request->all());
            return redirect()->route('siswa')
                ->with('success', 'Project created successfully.');
        }
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
        $rules = array(
            'nama' => 'required',
            'nis' => 'required',
            'nisn' => 'required|max:10',
            'alamat' => 'required',
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect()->route('siswa.edit', $request->id)->withErrors($errors)->withInput($request->all());
        } else{
            Siswa::where('id', $request->id)->update([
                'nama' => $request->nama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nis' => $request->nis,
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
                'nama_ibu' => $request->nama_ibu,
                'status' => $request->status
            ]);
            return redirect()->route('siswa')
                ->with('success', 'Project created successfully.');
        }
    }
}
