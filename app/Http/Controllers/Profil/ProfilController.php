<?php

namespace App\Http\Controllers\Profil;

use App\Profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index()
    {
        $profils = Profil::all();
        return view('profil.index',compact('profils'));
    }
    
    public function create()
    {
        return view('profil.create');
    }

    public function store(Request $request)
    {
        $profil = Profil::create([
            'name'=>$request->name,
            'tempat_lahir'=>$request->tempat_lahir,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'usia'=>$request->usia,
            'hobi'=>$request->hobi,
        ]);

        flash()->success('Data berhasil di buat');

        return redirect()->back();
    }

    public function destory($id)
    {
        $profil = Profil::findOrFail($id);
        $profil->delete();

        flash()->success('Profil berhasil di hapus');
        return redirect()->back();
    }

    public function edit($id)
    {
        $profil= profil::findOrFail($id);

        return view('profil.edit', compact('profil'));
    }

    public function update(Request $request, $id)
    {
        $profil = Profil::where('id', $id)->first();

        $profil->name = $request->input('name');
        $profil->tempat_lahir = $request->input('tempat_lahir');
        $profil->tanggal_lahir = $request->input('tanggal_lahir');
        $profil->jenis_kelamin = $request->input('jenis_kelamin');
        $profil->usia = $request->input('usia');
        $profil->hobi = $request->input('hobi');

        $profil->save();

        flash()->success('Profil berhasil di ubah');

        return redirect()->back();
    }

    public function show($id)
    {
        $profil = Profil::findOrFail($id);

        return view('profil.detail', compact('profil'));
    }
}
