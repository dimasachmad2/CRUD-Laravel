<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function create($id){
        $id_pertanyaan = $id;
        return view('larahub.form_jawaban', compact('id_pertanyaan'));
    }

    public function store(Request $request){
        unset($request['_token']);
        // dd($request->all());
        $jawaban = JawabanModel::save($request->all());
        $id_pertanyaan = $request['id_pertanyaan'];
        $str_target = "/jawaban/".$id_pertanyaan;
        return redirect($str_target);
    }

    public function index($id){
        // $jawaban = JawabanModel::get_all();
        // dd($jawaban->all());
        $id_pertanyaan = $id;
        $jawabanbyId = JawabanModel::find_by_id($id);
        return view('larahub.index_jawaban', compact('jawabanbyId','id_pertanyaan'));
    }

    public function edit($id){
        $jawaban_edit = JawabanModel::find_by_id_first($id);
        // dd($jawaban_edit);
        return view('larahub.edit_jawaban',compact('jawaban_edit'));
    }

    public function update($id,Request $request){
        $jawaban_update = JawabanModel::update($id,$request->all());
        $id_pertanyaan = $request['id_pertanyaan'];
        $str_target = "/jawaban/".$id_pertanyaan;
        // dd($str_target);
        return redirect($str_target);
    }
    
}
