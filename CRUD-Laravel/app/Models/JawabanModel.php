<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

Class JawabanModel{
    public static function get_all(){
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

    public static function save($data){
        $new_jawaban = DB::table('jawaban')->insert($data);
        return $new_jawaban;
    }

    public static function find_by_id($id){
        $jawaban_by_id = DB::table('jawaban')->where('id_pertanyaan',$id)->get();
        return $jawaban_by_id;
    }
}