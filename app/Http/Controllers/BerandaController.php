<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function index(Request $request)
    {
        $tamu = $request->tamu??'Tamu Undangan';
        return view('index',compact('tamu'));
    }
}
