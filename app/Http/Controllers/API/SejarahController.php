<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sejarah;


class SejarahController extends Controller
{
    public function index()
    {
        $sejarah = Sejarah::all();
        return response()->json($sejarah);
    }
}
