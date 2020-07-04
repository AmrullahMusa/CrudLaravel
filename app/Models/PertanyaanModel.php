<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
public static function get_all(){
    $tanya = DB::table('pertanyaans')->get(); //get = untuk memanggil semua variable
    return $tanya;
}

public static function save($data){
    unset($data["_token"]);
    $new_tanya = DB::table('pertanyaans')->insert($data); 
    return $new_tanya;
}
}