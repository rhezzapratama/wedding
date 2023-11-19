<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListTamu;
use Validator;

class ListTamuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if(request()->ajax())
        {
            if ($request->input('read') == '1') {
                listTamu::where('read', '1');
            }
            return datatables()->of(listTamu::latest('id')->get())
                    ->addColumn('action', function($data){
                        $url_tamu = $data->alias;
                        $url = 'http://ayudanreza.my.id/?tamu='.$url_tamu.'';
                        $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<a href="'.$url.'" class="btn btn-warning btn-sm" target="_blank">View</a>';
                        return $button;
                    })->addColumn('send', function($data){
                        $nama_tamu = str_replace("&","%26",$data->nama);
                        $url_tamu = $data->alias;
                        $tlp_substr = substr($data->no_tlp,1);
                        $tlp = '+62'.$tlp_substr;
                        $url = 'http://ayudanreza.my.id/?tamu='.$url_tamu.'';
                        $tgl = $data->tgl;
                        $pesan = 'Assalamualaikum Wa Rahmatullahi Wa Barakaatuh%20%0ABismillahirahmanirrahim.%20%0A%0AYth.%20%0A*' . $nama_tamu . '*%20%0A%0ATanpa mengurangi rasa hormat, perkenankan kami mengundang Bapak/Ibu/Saudara/i, teman sekaligus sahabat, untuk menghadiri acara pernikahan kami : %20%0A%0A';
                        if ($tgl == '02') {
                            $nama1 = 'Sri Rahayu Gantini, S.T.';
                            $nama2 = 'Reza Pratama, S.Kom.';
                            $namaalias1 = 'Ayu';
                            $namaalias2 = 'Reza';
                        } else {
                            $nama1 = 'Reza Pratama, S.Kom.';
                            $nama2 = 'Sri Rahayu Gantini, S.T.';
                            $namaalias1 = 'Reza';
                            $namaalias2 = 'Ayu';
                        }
                        $pesan .= '*' . $nama1 . ' %26 ' . $nama2 . '*%20%0A%0A';
                        $pesan .= 'Berikut link undangan kami untuk info lengkap dari acara bisa kunjungi:%20%0A' . $url . '%20%0A%0AMerupakan suatu kebahagiaan apabila Bapak/Ibu/Saudara/i berkenan untuk hadir dan memberikan doa restu.%20%0ASaudara/i juga dapat mengisi Ucapan dan Konfirmasi kehadiran di Wedding Wish. Terima Kasih. %20%0A%0AWassalamualaikum Wa Rahmatullahi Wa Barakaatuh %20%0A%0AHormat kami,%20%0A'.$namaalias1.' %26 '.$namaalias2;
                        // $button = '<a href="https://api.whatsapp.com/send?phone='.$tlp.'&text='.$pesan.'" target="_blank" type="button" name="whatsapp" class="btn btn-success btn-sm btn-block">Whatsapp</a>';
                        $button = '<a href="https://api.whatsapp.com/send?phone='.$tlp.'&text='.$pesan.'" target="_blank" type="button" name="whatsapp" class="btn btn-success btn-sm btn-block">Whatsapp</a>';
                        return $button;
                    })
                    ->rawColumns(['action', 'send'])
                    ->make(true);
        }
        return view('list_tamu');
    }

    public function search(Request $request)
    {
        dd($request->all());
    }

    public function store(Request $request)
    {
        $rules = array(
            'nama' => 'required',
            'no_tlp' => 'required',
            'tamu' => 'required',   
            'tgl' => 'required',   
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $text = $request->nama;
        $text = str_replace(' ', '-', $text);
        $text = str_replace('&', 'dan', $text);
        $alias = strtolower($text);

        $form_data = array(
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'tamu' => $request->tamu,
            'tgl' => $request->tgl,
            'alias' => $alias
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
            'nama' =>  'required',
            'no_tlp' =>  'required',
            'tamu' =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $text = $request->nama;
        $text = str_replace(' ', '-', $text);
        $text = str_replace('&', 'dan', $text);
        $alias = strtolower($text);

        $form_data = array(
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'tamu' => $request->tamu,
            'tgl' => $request->tgl,
            'alias' => $alias
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
