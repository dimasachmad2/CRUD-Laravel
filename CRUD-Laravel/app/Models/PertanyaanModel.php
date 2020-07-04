<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

Class PertanyaanModel{
    public static function get_all(){
        $pertanyaan = DB::table('petanyaan')->get();
        return $pertanyaan;
    }

    public static function save($data){
        $new_pertanyaan = DB::table('petanyaan')->insert($data);
        return $new_pertanyaan;
    }
}