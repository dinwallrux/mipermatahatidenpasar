<?php

namespace App\Http\Controllers;

use App\Peran;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $number = 1;
        $datas = Peran::latest()->get();
        return view('pages.peran.index', compact('number', 'datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.peran.peranTambah');
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
            'nama' => 'required',
        ]);

        $peran = [
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama, '-'),
        ];

        Peran::create($peran);

        return redirect()->route('peran')->with('success', 'Peran Berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function show(Peran $peran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  Peran::where('id', $id)->get()->first();
        return view('pages.peran.peranEdit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peran $peran)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Peran::where('id', $request->id)->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama, '-'),
        ]);
        return redirect()->route('peran')
            ->with('success', 'Peran berhasil di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peran  $peran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Peran::where('id', $id)->delete();
        return redirect()->route('peran')->with('success', 'Peran berhasil dihapus');
    }
}
