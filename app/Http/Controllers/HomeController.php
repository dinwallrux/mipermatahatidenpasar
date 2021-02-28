<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Informasi;
use App\Kategori;
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
        $galeris = Galeri::with('kategori')->get();
        $groupedGalleries = $galeris->mapToGroups(function ($item, $key) {
            return [
                $item->kategori['slug'] => $item
            ];
        });
        $extractGalleries = [];
        foreach (Kategori::all() as $key => $value) {
            $slug = $value->getOriginal('slug');
            array_push($extractGalleries, $groupedGalleries->get($slug)->first());
        }
        
        $profil = ProfilSekolah::get()->first();
        $gurus = TenagaPendidik::where(['jenis_tendik' => 'gtk', 'status' => 1])->orderBy('order', 'ASC')->get();
        $informasis = Informasi::where(['jenis_pengumuman' =>'siswa', 'publish' => 1])->get();
        return view('home.index', compact('profil', 'groupedGalleries', 'extractGalleries', 'gurus', 'informasis'));
    }
}
