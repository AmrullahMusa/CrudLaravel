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
        $data = $request->all();
        PertanyaanModel::save($data);
        return redirect('/pertanyaan');
   }

   public function index(){
       $pertanyaans = PertanyaanModel::get_all();
       return view('pertanyaan', compact ('pertanyaans'));
   }

   
}
