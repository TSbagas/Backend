<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sejarah = Sejarah::all();
        return view('Pages.SejarahPages.SejarahFikom', ['sejarah' => $sejarah]);
    }
    public function add()
    {
        return view('Pages.SejarahPages.add');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255|unique:sejarah',
            'content' => 'required|string',
        ]);
        $sejarah = Sejarah::create($validatedData);
        return redirect('/sejarah');
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     * Display the specified resource.
     */
    public function show(Sejarah $sejarah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sejarah $sejarah, $id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view("Pages.SejarahPages.edit", compact('sejarah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        $sejarah = Sejarah::findOrFail($id);
        $sejarah->update($validatedData);
        return redirect("/sejarah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sejarah $sejarah, $id)
    {
        $sejarah = Sejarah::findOrFail($id);
        $sejarah->delete();
        return redirect("/sejarah");
    }
}
