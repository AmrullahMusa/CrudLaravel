<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
   public function create(){
    return view('form');
   }

   public function store(Request $request){
        $data = $request->all();
        PertanyaanModel::save($data);
        return redirect('/pertanyaan');
   }

   public function index(){
       $pertanyaans = PertanyaanModel::get_all();
       return view('pertanyaan', compact ('pertanyaans'));
   }

   public function show($id){
    $pertanyaan = PertanyaanModel::find_by_id($id);
    $jawabans = JawabanModel::find_by_pertanyaan_id($id);
    return view('answer', compact('pertanyaan','jawabans'));
}
   public function edit($id){
    $pertanyaan = PertanyaanModel::find_by_id($id);
    //$data = $request->all();
    return view ('edit', compact('pertanyaan', 'id'));
   }

   public function update(Request $request){
    $data = $request->all();
    unset($data["_token"]);
    unset($data["_method"]);
    //dd($data);
    PertanyaanModel::update($data);
    return redirect('/pertanyaan');
   }

   public function delete($id){
    PertanyaanModel::delete($id);
    return redirect('/pertanyaan');
   }
}
