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

public static function find_by_id($id){
    $pertanyaan = DB::table('pertanyaans')->where('id',$id)->first();//first menampilkan satu parameter jawaban (kebalikan dari get)
    return $pertanyaan;
    }

public static function update($data){
    $update = DB::table('pertanyaans')->where('id',$data['id'])->update($data);
    return $update;
}

public static function delete($id){
    $pertanyaan = DB::table('pertanyaans')->where('id',$id)->delete();
    return 'delete';
    }
}