<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Komentar;

class KomentarController extends Controller
{
    //
    public function home(Request $request)
    {
        $tamu = $request->tamu??'Tamu Undangan';
        $items = Komentar::latest()->paginate(5);
        return view('komentar', compact('tamu'));
    }

    public function index(Request $request)
    {
        $items = Komentar::latest()->paginate(5);
        return response()->json($items);
    }

    public function store(Request $request)
    {
        $create = Komentar::create($request->all());
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
