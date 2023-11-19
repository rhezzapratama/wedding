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
        $no_tlp = $obj->no_tlp??'';
        return view('index', ['tamu' => $tamu, 'code_tamu' => $code_tamu, 'alias' => $alias, 'tgl' => $tgl, 'no_tlp' => $no_tlp]);
    }

    public function update(Request $request){
        $id = $request->id;
        $form_data = array(
            'read' => $request->read,
        );
        ListTamu::whereId($id)->update($form_data);
        return response()->json(['success' => 'Read data']);
    }
}
