<?php

namespace App\Http\Controllers;

use App\Rombel;
use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'nisn' => 'required|max:10',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        );

        if($request->hasFile('foto_siswa')){
            // Ganti nama file dan simpan di storage
            $image = $request->file('foto_siswa');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $path_image = $request->file('foto_siswa')->storeAs('public', $new_name);
        } else{
            $path_image = null;
        }

        $data = [
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
            'status' => $request->status,
            'foto_siswa' => $path_image,
        ];
        $validator = Validator::make($data, $rules);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect()->route('siswa.tambah')->withErrors($errors)->withInput($request->all());
        } else{
            Siswa::create($data);
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
            'nisn' => 'required|max:10',
            'alamat' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        );
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            $errors = $validator->errors();
            return redirect()->route('siswa.edit', $request->id)->withErrors($errors)->withInput($request->all());
        } else{
            // Ngambil gambar lama
            $oldPhoto = Siswa::where('id', $request->id)->first()->getOriginal('foto_siswa');
            
            // Check apakah ada gambar baru yg mau di update
            if($request->hasFile('foto_siswa')){
                // Ganti nama dan Simpan gambar di storage
                $image = $request->file('foto_siswa');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $path_image = $request->file('foto_siswa')->storeAs('public', $new_name);

                // Hapus gambar yg lama
                Storage::delete($oldPhoto);
            } else {
                $path_image = $oldPhoto;
            }

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
                'status' => $request->status,
                'foto_siswa' => $path_image,
            ]);
            return redirect()->route('siswa')
                ->with('success', 'Siswa Berhasil di update.');
        }
    }
}
