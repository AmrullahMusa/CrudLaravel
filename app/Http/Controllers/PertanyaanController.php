<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;


class PertanyaanController extends Controller
{
   public function create(){
    return view('form');
   }

   public function store(Request $request){
        $new_tanya = PertanyaanModel::save($request->all());
        return redirect('/pertanyaan');
   }

   public function index(){
       $pertanyaan = PertanyaanModel::get_all();

       return view('pertanyaan', compact ('pertanyaan'));
   }

   
}
