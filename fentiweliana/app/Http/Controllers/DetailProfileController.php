<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailProfileController extends Controller
{
    public function index(){
    	//return "Method ini nantinya akan mengambil semua data user";
        $nama = "Dzaki Joman";
        $pelajaran =["Algoritma & Pemograman","Kalkulus","Pemograman web"];

        return view('homepage', compact('nama','pelajaran'));
    }
    public function create(){
    	return "Method ini nantinya akan dugunakan untuk menampilkan form untuk menambah data user.";
    }
    public function store(Request $request){
    	return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru.";
    }
    public function show($id){
    	return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id-" . $id;
    }
    public function edit($id){
    	return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id-" . $id;
    }
    public function update(Request $request, $id){
    	return "Method ini nantinya akan digunakan untuk mengubah data user dengan id-" . $id;
    }
    public function destroy($id){
    	return "Method ini nantinya digunakan untuk menghapus data user dengan id-" . $id;
    }
}
