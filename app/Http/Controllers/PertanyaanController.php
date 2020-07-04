<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    
    public function create(){
        return view('pertanyaan.form');
    }
    
    public function store(Request $request){
        // dd($request->all());
        $new_pertanyaan = PertanyaanModel::save($request->all());
        return redirect('/pertanyaan');
    }
    
    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function show($pertanyaan_id){
        $pertanyaan = PertanyaanModel::find_by_id($pertanyaan_id);
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($pertanyaan_id){
        $pertanyaan = PertanyaanModel::find_by_id($pertanyaan_id);
            return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($pertanyaan_id, Request $request){
        $pertanyaan = PertanyaanModel::update($pertanyaan_id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($pertanyaan_id){
        $deleted = PertanyaanModel::destroy($pertanyaan_id);
        return redirect('/pertanyaan');
    }
}
