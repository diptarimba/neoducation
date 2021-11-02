<?php

namespace App\Http\Controllers;

use App\Models\Mapels;
use App\Models\Leveltentors;
use App\Models\Packages;
use App\Models\Incomes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminConfiguration extends Controller
{
	public function showmapel(){
		$mapels = Mapels::all();
		return view('administrator.configuration.mapel.home', compact('mapels')); 
	}
	
    public function tambahmapel(Request $request){
		
		$validate = $request->validate([
			'NameMapel' => 'required',
			'UniqueCode' => 'required',		
		]);
		
		$mapel = new Mapels();
		$mapel->name_mapel = $request->NameMapel;
		$mapel->uniqueid_mapel = $request->UniqueCode;
		$mapel->save();
		
		return redirect('/admin/configuration/mapel');
	}
	
	public function hapusmapel($id){
		Mapels::find($id)->delete();
		return redirect('/admin/configuration/mapel');
	}
	
	public function showlevel(){
		$levels = Leveltentors::all();
		return view('administrator.configuration.level.home', compact('levels'));
	}
	
	public function tambahlevel(Request $request){
		
		$validate = $request->validate([
			'tingkatan' => 'required',
			'salary' => 'required'
		]);
		
		$level = new Leveltentors();
		$level->tingkatan = $request->tingkatan;
		$level->salary = $request->salary;
		$level->bonus = $request->bonus;
		$level->save();
		
		return redirect('/admin/configuration/level');
		
	}
	
	public function hapuslevel($id){
		Leveltentors::find($id)->delete();
		return redirect('/admin/configuration/level');
	}
	
	public function showkuisioner(){
		return view('administrator.configuration.kuisioner.home');
	}
}
