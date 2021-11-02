<?php

namespace App\Http\Controllers;

use App\Models\Orangtua;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){
		//$data_siswa = DB::table('tb_orangtua')->get();
		$data_siswa = Orangtua::all();
		
		return view('dipta',['siswa' => $data_siswa]);
	}
	
	public function edit($id){
		//$data_siswa = 
	}
	
	public function update($id){
		
	}
	
	public function delete($id){
		
	}
	
	public function tambah(){
		
	}
}
