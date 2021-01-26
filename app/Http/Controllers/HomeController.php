<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Informasi;
use App\TenagaPendidik;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $galeris = Galeri::with('kategori')->get();
        $gurus = TenagaPendidik::where('jenis_tendik', 'gtk')->get();
        $informasis = Informasi::where(['jenis_pengumuman' =>'siswa', 'publish' => 1])->get();
        return view('home.index', compact('galeris', 'gurus', 'informasis'));
    }
}
