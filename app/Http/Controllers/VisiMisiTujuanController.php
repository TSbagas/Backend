<?php

namespace App\Http\Controllers;

use App\Models\VisiMisiTujuan;
use Illuminate\Http\Request;

class VisiMisiTujuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visimisitujuan = VisiMisiTujuan::all();
        return view('Pages.VisiMisiTujuanPages.VisiMisiTujuan',['visi' => $visimisitujuan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages.VisiMisiTujuanPages.add');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255|unique:sejarah',
            'content' => 'required|string',
        ]);
        $visimisitujuan = VisiMisiTujuan::create($validatedData);
        return redirect('/visi-misi-dan-tujuan');
    }

    /**
     * Display the specified resource.
     */
    public function show(VisiMisiTujuan $visiMisiTujuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vmt = VisiMisiTujuan::findOrFail($id);
        return view("Pages.VisiMisiTujuanPages.edit",compact('vmt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        $sejarah = VisiMisiTujuan::findOrFail($id);
        $sejarah->update($validatedData);
        return redirect("/visi-misi-dan-tujuan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vmt = VisiMisiTujuan::findOrFail($id);
        $vmt->delete();
        return redirect('/visi-misi-dan-tujuan');
    }
}
