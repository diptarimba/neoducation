<?php

namespace App\Http\Controllers;

use App\Models\Mapels;
use App\Models\Leveltentors;
use App\Models\Packages;
use App\Models\Configs;
use App\Models\Incomes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminConfiguration extends Controller
{
	
	public function showmapel(){
		$mapels = Mapels::all();
		return view('administrator.configuration.mapel.home', compact('mapels')); 
	}
	
	public function showpackage(){
		$package = Packages::all();
		return view('administrator.configuration.package.home', compact('package')); 
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
	
	public function tambahpackage(Request $request){
		
		$validate = $request->validate([
			'packages' => 'required',
			'price' => 'required',		
		]);
		
		$package = new Packages();
		$package->package_name = $request->packages;
		$package->package_price = $request->price;
		$package->save();
		
		return redirect('/admin/configuration/package');
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
	
	public function hapuspackage($id){
		Packages::find($id)->delete();
		return redirect('/admin/configuration/package');
	}
	
	public function showkuisioner(){
		$query = Configs::checkCurrentConfigs();
		// dd($query);
		return view('administrator.configuration.kuisioner.home', compact('query'));
		
	}
	
	public function updateharga(Request $request, $id)
	{
		$validate = $request->validate([
			'price' => "sometimes|numeric|min:4"
		]);
		
		if($request->price !== '' || !empty($request->price)){
			$request->price = str_replace(".","",$request->price);
			$request->price = str_replace(",","",$request->price);
			$hargapaket = Packages::find($id);
			$hargapaket->package_price = $request->price;
			$hargapaket->save();
			
			return redirect('/admin/configuration/package')->with('status', 'Sukses merubah harga paket.');
		}
		return redirect('/admin/configuration/package');
		
	}
	
	public function updatekuisioner(Request $request){
		
		$validate = $request->validate([
			'type' => 'required',
			'param' => 'required'
		]);
		
		if($request->type == 1){
			$configs = new Configs;
			$configs->keyparams = $request->param;
			$configs->valueparams = 'aktif';
			$configs->save();
		}else{
			Configs::DeleteExistConfig($request->param);
		}
		return redirect('/admin/configuration/kuisioner');
		
	}
	
}
