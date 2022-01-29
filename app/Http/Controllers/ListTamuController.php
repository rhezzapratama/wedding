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
                        $button = '<button type="button" name="whatsapp" id="'.$data->id.'" class="delete btn btn-success btn-sm btn-block">Whatsapp</button>';
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
            'no_tlp' => 'required',
            'pesan' => 'required'   
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

    public function show($id)
    {
        //
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
