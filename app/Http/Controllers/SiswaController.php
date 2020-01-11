<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = \App\Siswa::all();
        return view('siswa.index',['data_siswa'=> $data_siswa]);
    }
    public function create(Request $request)
    {
    	\App\Siswa::create($request->all());
    	return redirect('/siswa')->with('sukses', 'Data Berhasil Diinput');
    }
    public function edit($id)
    {
    	$siswa = \App\Siswa::find($id);
    	return view('siswa/edit', ['siswa'=> $siswa]);
    }
    public function update(Request $request, $id)
    {
    	$siswa = \App\Siswa::find($id);
    	$siswa-> update($request->all());
    	return redirect('/siswa')-> with('sukses', 'Data Berhasil Diinput');

    }
    public function delete($id)
    {
    	$siswa = \App\Siswa::find($id);
    	$siswa-> delete($siswa);
    	return redirect('/siswa')->with('sukses', 'Data Berhasil Dihapus');
    }
    public function home()
    {
        return view('siswa.home');
    }
    public function keluarga()
    {
        $data_kartu = \App\Kartu::all();
        return view('siswa.keluarga',['data_kartu'=> $data_kartu]);
    }
}
