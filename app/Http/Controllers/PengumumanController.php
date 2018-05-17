<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumumans= pengumuman::all();
        return view('news', compact('pengumumans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengumumans= pengumuman::all();
        return view('pengumuman', compact('pengumumans'));
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
            'gambar' => 'required|image|mimes:jpeg,png|max:5120',
        ]);

        if($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar_name = "g" . date('dm') . '_' . date('His') . '.' . $gambar->extension();
            $destinationPath = 'images';
            $request->gambar->move($destinationPath, $gambar_name);
        }

        $pengumumans = new pengumuman();
        $pengumumans->judul = $request->judul;
        $pengumumans->gambar = $gambar_name;
        $pengumumans->isi = $request->isi;
        $pengumumans->save();
        return redirect(route('admin.dashboard'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengumumans= pengumuman::find($id);
        return view('detailnews', compact('pengumumans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengumumans= pengumuman::find($id);
        return view('editpengumuman', compact('pengumumans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png|max:5120',
        ]);

        if($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar_name ="g" . date('dm') . '_' . date('His') . '.' . $gambar->extension();
            $destinationPath = 'images';
            $request->gambar->move($destinationPath, $gambar_name);
        }
        $pengumumans = pengumuman::find($id);
        $pengumumans->judul = $request->judul;
        $pengumumans->gambar = $gambar_name;
        $pengumumans->isi = $request->isi;
        $pengumumans->save();
        return redirect(route('admin.dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengumumans = pengumuman::find($id);
        $pengumumans->delete();
        return view('admindashboard', compact('pengumumans'));
    }
}
