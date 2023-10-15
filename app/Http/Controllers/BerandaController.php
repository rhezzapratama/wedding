<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListTamu;

class BerandaController extends Controller
{
    //
    public function index(Request $request)
    {
        $obj = listTamu::where('alias', '=', $request->tamu)->first();
        $tamu = $obj->nama??'Tamu Undangan';
        $code_tamu = $obj->id??'';
        $alias = $obj->alias??'';
        $tgl = $obj->tgl??'02';
        return view('index', ['tamu' => $tamu, 'code_tamu' => $code_tamu, 'alias' => $alias, 'tgl' => $tgl]);
    }
}
