<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use RealRashid\SweetAlert\Facades\Alert;


class SiswaController extends Controller
{
    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        Alert::success('Data Berhasil Ditambah!', 'Success!');
        $request->validate([
            'nis' => 'required|numeric|unique:siswa',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tmpt_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'no_tlp' => 'required|numeric'
        ]);
        Siswa::create($request->all());
        return redirect()->route('siswa.index');
    }

    public function show(Siswa $siswa)
    {
        return view('siswa.show', compact('siswa'));
    }

    public function edit($nis)
    {
        $siswa = Siswa::find($nis);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request,$nis)
    {   
        Alert::success('Data Berhasil Di Ubah!', 'Data Di Ubah!');
        $siswa = Siswa::find($nis);
        $request->validate([
            'nis' => 'required|numeric|unique:siswa',
            'nama' => 'required|string',
            'jenis_kelamin' => 'required',
            'tmpt_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'no_tlp' => 'required|numeric'
        ]);
        $siswa->update($request->all());
        return redirect()->route('siswa.index');
    }

    public function destroy($nis)
    {
        Alert::success('Data Berhasil Di Delete!', 'Data Di Delete!');
        $siswa = Siswa::find($nis);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
