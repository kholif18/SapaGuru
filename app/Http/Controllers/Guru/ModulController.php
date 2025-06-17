<?php

namespace App\Http\Controllers\Guru;

use App\Models\Modul;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guru.modul.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.modul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'file' => 'required|file|mimes:pdf,doc,docx,pptx',
            'kelas' => 'required',
            'jurusan' => 'required',
            'mapel' => 'required'
        ]);

        $filePath = $request->file('file')->store('moduls');

        Modul::create([
            'guru_id' => Auth::id(),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file_path' => $filePath,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'mapel' => $request->mapel
        ]);

        return redirect()->route('guru.modul.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Modul $modul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modul $modul)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modul $modul)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modul $modul)
    {
        //
    }
}
