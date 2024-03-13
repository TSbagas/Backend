<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("Pages.Users", ['key' => 'Users', 'users' => $users]);
    }
    public function add()
    {
        return view("Pages.AddUsers");
    }
    public function create(Request $request)
    {
        $user = User::create([
            'nama' => $request->nama,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/users');
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('Pages.UsersEdit', compact('users'));
    }
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->nama = $request->input('nama');
        if ($request->filled('password')) {
            $users->password = bcrypt($request->input('password'));
        }
        $users->save();
        return redirect('/users');
    }
    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/users');
    }
}
