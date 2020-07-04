<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
class JawabanController extends Controller
{
 
    public function store(Request $request){
         $new_jawab = JawabanModel::save($request->all());
         return redirect('/jawaban');
    }
 
    public function index($id){
        $jawaban = JawabanModel::find_by_id($id);
        return view('jawaban', compact('jawab'));
     }
 
 }