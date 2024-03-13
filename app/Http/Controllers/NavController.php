<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class NavController extends Controller
{
    public function Beranda()
    {
        return view("Pages.Beranda", ['key' => 'Beranda']);
    }
    public function SejarahFikom()
    {
        return view("Pages.SejarahFikom", ['key' => 'Sejarah']);
    }

}
