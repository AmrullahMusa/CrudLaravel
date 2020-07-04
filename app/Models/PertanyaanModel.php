<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
public static function get_all(){
    $tanya = DB::table('pertanyaan')->get();
    return $tanya;
}

public static function save($data){
    unset($data["_token"]);
    $new_tanya = DB::table('pertanyaan')->insert($data); 
    return $new_tanya;
}

public static function find_by_id($id){
$tanya = DB::table('pertanyaan')->where('id',$id)->first();
return $tanya;
}
}