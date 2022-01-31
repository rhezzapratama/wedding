<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listTamu;
use Validator;

class ListTamuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(request()->ajax())
        {
           
            return datatables()->of(listTamu::latest()->get())
                    ->addColumn('action', function($data){
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })->addColumn('send', function($data){
                        $nama_tamu = str_replace("&","%26",$data->nama);
                        $tlp_substr = substr($data->no_tlp,1);
                        $tlp = '+62'.$tlp_substr;
                        $url = 'http://ayudanreza.com/?tamu='.$data->id.'';
                        $pesan = 'Assalamualaikum Wa Rahmatullahi Wa Barakaatuh%20%0A%0AKepada *_'.$nama_tamu.'_*%20%0A%0ADengan memohon rahmat dan ridho Allah SWT, tanpa mengurangi rasa hormat, kami :%20%0A%0AAyu %26 Reza%20%0A%0ABermaksud untuk mengundang teman-teman pada acara Resepsi Pernikahan kami.%20%0A%0AInformasi lengkap tentang waktu dan tempat acara ini bisa teman-teman lihat di '.$url.'%20%0A%0AMerupakan kebahagiaan dan suatu kehormatan bagi kami apabila teman-teman berkenan memberikan doa restu dan berkesempatan untuk hadir pada acara pernikahan kami.%20%0A%0AWassalamualaikum Wa Rahmatullahi Wa Barakaatuh%20%0A%0A💕 Ayu %26 Reza 💕';
                        $button = '<a href="https://api.whatsapp.com/send?phone='.$tlp.'&text='.$pesan.'" target="_blank" type="button" name="whatsapp" class="btn btn-success btn-sm btn-block">Whatsapp</a>';
                        return $button;
                    })
                    ->rawColumns(['action', 'send'])
                    ->make(true);
        }
        return view('list_tamu');
    }

    public function store(Request $request)
    {
        $rules = array(
            'nama' => 'required',
            'no_tlp' => 'required'
            //'pesan' => 'required'   
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'pesan' => $request->pesan
        );

        ListTamu::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
    }

    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = ListTamu::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }


    public function update(Request $request)
    {
        $rules = array(
            'nama'    =>  'required',
            'no_tlp'     =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'nama'       =>   $request->nama,
            'no_tlp'        =>   $request->no_tlp
        );
        ListTamu::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Data is successfully updated']);
    }

    public function destroy($id)
    {
        $data = ListTamu::findOrFail($id);
        $data->delete();
    }
}
