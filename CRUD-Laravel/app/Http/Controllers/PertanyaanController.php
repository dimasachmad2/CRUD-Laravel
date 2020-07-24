<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//model custom
use App\Models\PertanyaanModel;
//model eloquent
use App\pertanyaan;


class PertanyaanController extends Controller
{
    public function create(){
        return view('larahub.form_pertanyaan');
    }

    public function store(Request $request){
        unset($request["_token"]);
        $new_pertanyaan = PertanyaanModel::save($request->all());
        // dd($request->all());
        return redirect('/pertanyaan');
    }

    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        // dd($pertanyaan->all());
        return view('larahub.index_pertanyaan', compact('pertanyaan'));
    }
}
