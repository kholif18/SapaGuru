<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Modul;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PembelajaranController extends Controller
{
    public function modul()
    {
        $siswa = Auth::user()->siswaProfile;
        $moduls = Modul::where('kelas', $siswa->kelas)
                    ->where('jurusan', $siswa->jurusan)
                    ->get();
        return view('siswa.pembelajaran.modul', compact('moduls'));
    }

    public function showModul($id)
    {
        $modul = Modul::findOrFail($id);
        return view('siswa.pembelajaran.show-modul', compact('modul'));
    }
}
