<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {

public static function save($data){
    $new_jawab = DB::table('jawabans')->insert($data); 
    return $new_jawab;
}

public static function find_by_pertanyaan_id($id_pertanyaan){
$jawab = DB::table('jawabans')->where('pertanyaan_id',$id_pertanyaan)->get();
return $jawab;
}
}