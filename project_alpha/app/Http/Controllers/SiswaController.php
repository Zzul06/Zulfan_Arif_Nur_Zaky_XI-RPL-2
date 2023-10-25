<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rule;


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
        toast('Data Berhasil Ditambah!', 'success')->position('bottom');
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
        $siswa = Siswa::FindorFail($nis);

        $validasi = $request->validate([
            "nis" => [
                "required",
                Rule::unique('siswa','nis')->ignore($nis, 'nis'),
            ],
                'nama' => 'required|string',
                'jenis_kelamin' => 'required',
                'tmpt_lahir' => 'required|string',
                'tgl_lahir' => 'required|date',
                'alamat' => 'required',
                'no_tlp' => 'required|numeric'
        ]);

        Siswa::where("nis", $siswa->nis)->update($validasi);
        toast('Data Berhasil Diuabah!', 'success')->position('bottom');
        return redirect()->route('siswa.index');
    }

    public function destroy($nis)
    {
        $siswa = Siswa::find($nis);
        $siswa->delete();
        toast('Data Berhasil Di Delete!', 'success')->position('bottom');
        return redirect()->route('siswa.index');
    }
}
