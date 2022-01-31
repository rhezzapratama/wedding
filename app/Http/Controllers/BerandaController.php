<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listTamu;

class BerandaController extends Controller
{
    //
    public function index(Request $request)
    {
        $obj = listTamu::whereId($request->tamu)->first();
        $tamu = $obj->nama??'Tamu Undangan';
        return view('index',compact('tamu'));
    }
}
