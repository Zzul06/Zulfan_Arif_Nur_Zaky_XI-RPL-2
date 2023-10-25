<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class siswacontroller extends Controller
{
    public function index()
    {
        $siswa = siswa::all();
        return view('cv', compact('siswa'));
    }
}
