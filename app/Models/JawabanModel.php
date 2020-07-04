<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
public static function get_all(){
    $jawaban = DB::table('jawaban')->get();
    return $jawaban;
}

public static function save($data){
    unset($data["_token"]);
    $new_jawab = DB::table('jawaban')->insert($data); 
    return $new_jawab;
}

public static function find_by_id($id){
$jawab = DB::table('jawaban')->where('id',$id)->first();
return $jawab;
}
}