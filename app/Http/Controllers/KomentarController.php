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
        $no_tlp = $request->no_tlp??'';
        $items = Komentar::latest()->paginate(5);
        return view('komentar',['tamu' => $tamu, 'code_tamu' => $code_tamu, 'alias' => $alias, 'no_tlp' => $no_tlp]);
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
    $ucapan = $request->ucapan;

    // Ganti beberapa kata dengan "****"
    $ucapan = preg_replace('/(kontol|anjing|goblok|blok|blog|tolol|tai|sianjing|memek|ngentot|bego|jancok|cok|tot|tol|gblk|ajg|anjg|monyet|nyet|babi|njing|jing|tae|cuk|jancuk|setan|asu|assuu|aassuuu|anying|jembut|ngewe|ngews|entot|jilmek|tool|toool|tete|pentil|puting|coli|colay|bacol|bokep|coly|hentai|hentay|toket|sepong|spong|sponk|seponk|colmek|tusbol|bool|kondom|sperma|peju|ejakulasi|crot|vibrator|ngocok|jilat|kocok|69|doggy|doggystyle|dog|vagina|titit|anus|peler|pler|galer|ler|fuck|fak|bj|blowjob|sange|engas|tt|itil|silit)/', '***', $ucapan);

    if (!$check_id) {
        $create = ['responseCode' => '02'];
    } else {
        $request->merge(['ucapan' => $ucapan]);
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
