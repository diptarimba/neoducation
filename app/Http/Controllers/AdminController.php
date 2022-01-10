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
			return view('administrator.keuangan.home', compact('unpaidThisMonth','paidThisMonth', 'unpaid', 'paid', 'all'));
		}

	}

    public function lapkeuDetail(Request $request)
    {
        $reports = Reportusers::with('student')->when($request->status_bayar, function ($q) use ($request){
            $q->where('status_bayar', $request->status_bayar);
        })->when($request->this_month, function ($q) use ($request){
            $q->whereRaw('MONTH(`created_at`) = MONTH(CURRENT_DATE()) AND YEAR(`created_at`) = YEAR(CURRENT_DATE())');
        })->when($request->bulan, function($q) use ($request){
            $q->whereMonth('created_at', $request->bulan);
        })->when($request->tahun, function($q) use ($request){
            $q->whereYear('created_at', $request->tahun);
        })->paginate(10);

        $year = Reportusers::select(DB::raw('YEAR(created_at) as year'))->groupby('year')->pluck('year');
        $month = Reportusers::select(DB::raw('MONTH(created_at) as month'))->groupby('month')->pluck('month');
        return view('administrator.keuangan.subkeuangan', compact('reports','year','month'));
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
        $paidCount = Reportusers::where('hash', $request->hashCode)->where('status_bayar', 'paid')->count();
        if($paidCount == 0){
            Reportusers::where('hash', $request->hashCode)->where('status_bayar', 'unpaid')->delete();
            Reports::where('hash', $request->hashCode)->delete();
            return redirect()->route('admin.presensi')->with('status', 'Data Berhasil Dihapus');
        }
        return redirect()->route('admin.presensi')->with('error', 'Data Tidak dapat dihapus, sudah ada yang dibayar');
	}

}
