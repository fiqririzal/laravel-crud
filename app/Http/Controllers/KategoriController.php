<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function create(){
        return view('kategori.create');
    }
    public function store(Request $request){
            $request->validate([
                'nama' => 'required',
                'deskripsi' => 'required',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'deskripsi.required'  => 'deskripsi tidak boleh kosong',
            ]
        ); 
        //insert tavle
        DB::table('kategori')->insert(
            [
                'nama' => $request['nama'],
                'deskripsi'=>$request['deskripsi']
            ]
        );
        return redirect('/');
    }
    public function index(){
        $kategori = DB::table('kategori')->get();
 
        return view('kategori.index', compact('kategori'));
    }
    public function show($id)
    {
        $kategori = DB::table('kategori')->where('id',$id)->first();

        return view('kategori.show',compact('kategori'));
    }
    public function edit($id)
    {
        $kategori = DB::table('kategori')->where('id',$id)->first();

        return view('kategori.edit',compact('kategori'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ],
        [
            'nama.required' => 'Nama tidak boleh kosong',
            'deskripsi.required'  => 'deskripsi tidak boleh kosong',
        ]
    );
        DB::table('kategori')->where('id', $id)
              ->update(
                [
                    'nama' => $request['nama'],
                    'deskripsi' =>$request['deskripsi']
                ]
            );
            return redirect('/kategori');    
    }
    public function destroy($id){
        DB::table('kategori')->where('id','=', $id)->delete();

        return redirect('/kategori');
    }

}
