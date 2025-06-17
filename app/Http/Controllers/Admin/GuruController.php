<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\GuruProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = User::with(['roles', 'guruProfile'])
                ->whereHas('roles', function($q) {
                    $q->where('name', 'guru');
                })->get();
    return view('admin.guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guru.create');
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
    public function show(GuruProfile $guruProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $guru = User::with('guruProfile')->findOrFail($id);
        return view('admin.guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GuruProfile $guruProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuruProfile $guruProfile)
    {
        //
    }
}
