<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function create(){
        return view('larahub.form_jawaban');
    }

    public function store(Request $request){
        unset($request['_token']);
        // dd($request->all());
        $jawaban = JawabanModel::save($request->all());
        return redirect('/jawaban');
    }

    public function index($id){
        // $jawaban = JawabanModel::get_all();
        // dd($jawaban->all());
        $id_pertanyaan = $id;
        $jawabanbyId = JawabanModel::find_by_id($id);
        return view('larahub.index_jawaban', compact('jawabanbyId','id_pertanyaan'));
    }

    
}
