<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\SiswaProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $siswas = User::with(['roles', 'siswaProfile'])
        //             ->whereHas('roles', function($q) {
        //                 $q->where('name', 'siswa');
        //             })->get();
        // return view('admin.siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SiswaProfile $siswaProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiswaProfile $siswaProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiswaProfile $siswaProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SiswaProfile $siswaProfile)
    {
        //
    }
}
