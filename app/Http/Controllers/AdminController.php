<?php

namespace App\Http\Controllers;

use App\Models\Tentors;
use App\Models\Students;
use App\Models\Reportusers;
use App\Models\Reports;
use App\Models\Admins;
use App\Models\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$tentor = Tentors::count();
		$siswa = Students::count();
		$sumBimbingan_siswa = Reportusers::count();
		$sumBimbingan_tentor = Reports::count();
        return view('administrator.home', compact(['sumBimbingan_siswa', 'sumBimbingan_tentor', 'siswa', 'tentor']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin = Admins::all();
		return view('administrator.management.home', compact('admin'));
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
			'name' => 'required|min:5',
			'username' => 'required|min:5',
			'password' => 'required|min:8',
		],
		[
		    'name.min' => 'Nama minimal 5 karakter',
		    'username.min' => 'Username minimal 5 karakter',
		    'password.min' => 'Password minimal 8 karakter'
		]);
		
		$admin = new Admins;
		$admin->username = $request->username;
		$admin->name = $request->name;
		$admin->password = bcrypt($request->password);
		$admin->save();
		
		return redirect()->route('admin.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$request = new Request;
		if(Admins::count() > 1){
			Admins::find($id)->delete();
		}else{
			return redirect()->route('admin.create')->with('message', 'Administrator tidak bisa dihapus, hanya satu-satunya!');
		}
		
		return redirect()->route('admin.create');
    }
	
	public function showLapKeu()
	{
		if(Reportusers::count() <= 0){
			$nothing = true;
			return view('administrator.keuangan.home', compact('nothing'));
		}else{
			$reports = new Reportusers;
			$unpaidThisMonth = $reports->getUnpaid();
			$paidThisMonth = $reports->getPaid();
			$unpaid = $reports->getUnpaid("Total");
			$paid = $reports->getPaid("Total");
			$all = $reports->Total();
			//dd($unpaidThisMonth);
			return view('administrator.keuangan.home', compact('unpaidThisMonth','paidThisMonth', 'unpaid', 'paid', 'all'));
		}
		
	}
	
	public function presensi()
	{
		$data = Reports::with('tentor')->get();
		// dd($data);
		return view('administrator.presensi.home', compact('data'));
	}
	
	public function deletePresensi(Request $request)
	{
		$request->validate([
			'hashCode' => 'required',
		]);
		
		Reports::where('hash', $request->hashCode)->delete();
		Reportusers::where('hash', $request->hashCode)->delete();
		
		return redirect()->route('admin.presensi');
	}
	
}
