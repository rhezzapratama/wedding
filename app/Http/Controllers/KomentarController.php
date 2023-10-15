<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Komentar;
use App\ListTamu;
use Illuminate\Support\Facades\Crypt;

class KomentarController extends Controller
{
    //
    public function home(Request $request)
    {
        $tamu = $request->tamu??'Tamu Undangan';
        $code_tamu = Crypt::encryptString($request->code_tamu);
        $alias = $request->alias??'';
        $items = Komentar::latest()->paginate(5);
        return view('komentar',['tamu' => $tamu, 'code_tamu' => $code_tamu, 'alias' => $alias]);
    }

    public function index(Request $request)
    {
        $items = Komentar::latest()->paginate(5);
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $code_tamu = Crypt::decryptString($request->code_tamu);
        $check_id = ListTamu::where('id', '=', $code_tamu)->where('alias', '=', $request->alias)->first();
        if (!$check_id) {
            $create = ['responseCode' => '02'];
        } else {
            $create = Komentar::create($request->all());
            $create['responseCode'] = '00';
        }
        return response()->json($create);
    }

    public function update(Request $request, $id)
    {
        $edit = Komentar::find($id)->update($request->all());
        return response()->json($edit);
    }

    public function destroy($id)
    {
        Komentar::find($id)->delete();
        return response()->json(['done']);
    }

}
