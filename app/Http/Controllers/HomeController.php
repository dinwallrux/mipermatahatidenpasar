<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Informasi;
use App\ProfilSekolah;
use App\TenagaPendidik;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profil = ProfilSekolah::get()->first();
        $galeris = Galeri::with('kategori')->get();
        $gurus = TenagaPendidik::where(['jenis_tendik' => 'gtk', 'status' => 1])->orderBy('order', 'ASC')->get();
        $informasis = Informasi::where(['jenis_pengumuman' =>'siswa', 'publish' => 1])->get();
        return view('home.index', compact('profil', 'galeris', 'gurus', 'informasis'));
    }
}
