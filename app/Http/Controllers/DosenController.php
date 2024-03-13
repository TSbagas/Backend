<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('Pages.DosenPages.dosen', ['dosen' => $dosen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages.DosenPages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_dosen' => 'required|string|max:255',
            'tamatan_terakhir' => 'required|string|max:255',
            'NIDN' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'dosen_foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->file('dosen_foto')->extension();
        $request->file('dosen_foto')->move(public_path('images'), $imageName);

        $dosen = Dosen::create([
            'nama_dosen' => $validated['nama_dosen'],
            'tamatan_terakhir' => $validated['tamatan_terakhir'],
            'NIDN' => $validated['NIDN'],
            'jurusan' => $validated['jurusan'],
            'gambar' => $imageName,
        ]);
        return redirect('/dosen');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dosen = Dosen::FindOrFail($id);
        return view("Pages.DosenPages.edit", ["dosen" => $dosen]);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dosen = Dosen::FindOrFail($id);
        $dosen->delete();
        return redirect('/dosen');
    }
}
