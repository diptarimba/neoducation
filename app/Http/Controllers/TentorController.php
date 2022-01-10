<?php

namespace App\Http\Controllers;

use App\Models\Tentors;
use App\Models\Students;
use App\Models\Reportusers;
use App\Models\Reports;
use App\Models\Quizsiswas;
use App\Models\Models;
use App\Models\Packages;
use App\Models\Mapels;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class TentorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$id = Auth::id();
		$tentor = Tentors::find($id);
        return view('tentor.home', compact('tentor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$id = Auth::id();
		$mapel = Mapels::all();
		$tentor = Tentors::find($id);
		//dd($this->id);
		$siswa = Students::select(array('id', 'name', 'package'))->whereNotNull('package')->where('package', '!=', '')->get();
        return view('tentor.presensi', compact(['siswa','tentor','mapel']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		//dd($request);

		//dd(count($request->peserta));

		// dd($request);

        $validatedData = $request->validate([
			'topic' => 'required|min:5|max:255',
			'tempat' => 'required|min:5|max:255',
			'tanggal' => 'required',
			'idtentor' => 'required',
			'mapel' => 'required',
			'namaTentor' => 'required',
			'peserta' => 'required',
			'ans.*.1' => 'required',
			'ans.*.2' => 'required',
			'ans.*.3' => 'required',
			'ans.*.4' => 'required',
			'ans.*.5' => 'required',
			'ans.*.6' => 'required',
			'ans.*.7' => 'required',
			'ans.*.11' => 'required|gte:1|lte:100'
		],[
            'ans.*.11.lte' => 'Nilai yang diberikan ke siswa tidak boleh lebih dari 100',
            'ans.*.11.gte' => 'Nilai yang diberikan ke siswa tidak boleh kurang dari 1'
        ]);

		$hash = $this->unique_code(10);

		foreach($request->ans as $each){

				$quiz = new Quizsiswas;
				$quiz->hash = $hash;
				$quiz->siswa_id = $each['id'];
				$quiz->tentor_id = $request->idtentor;
				$quiz->ans1 = $each['1'];
				$quiz->ans2 = $each['2'];
				$quiz->ans3 = $each['3'];
				$quiz->ans4 = $each['4'];
				$quiz->ans5 = $each['5'];
				$quiz->ans6 = $each['6'];
				$quiz->ans7 = $each['7'];
				$quiz->ans8 = ($each['8']) ? $each['8'] : 'Tidak';
				$quiz->ans9 = ($each['9']) ? $each['9'] : 'Tidak';
				$quiz->ans10 = ($each['10']) ? $each['10'] : 'Tidak';
				$quiz->nilai = ($each['11']) ? $each['11'] : '';
				$quiz->save();
		}

		foreach($request->peserta as $each_peserta){

			$package = Students::where('id', $each_peserta)->pluck('package');
			$biaya = Packages::where('package_name', $package[0])->pluck('package_price');
			$reportusers = new Reportusers;
			$reportusers->topic = $request->topic;
			$reportusers->place = $request->tempat;
			$reportusers->tentors = $request->idtentor;
			$reportusers->mapel = $request->mapel;
			$reportusers->date_exec = $request->tanggal;
			$reportusers->name_tentors = $request->namaTentor;
			$reportusers->hash = $hash;
			$reportusers->status_bayar = 'unpaid';
			$reportusers->students = $each_peserta;
			$reportusers->biaya = $biaya[0];
			$reportusers->save();

		}

		$reports = new Reports;
		$reports->topic = $request->topic;
		$reports->place = $request->tempat;
		$reports->tentors = $request->idtentor;
		$reports->mapel = $request->mapel;
		$reports->date_exec = $request->tanggal;
		$reports->hash = $hash;
		$reports->students = implode(', ', $request->peserta);
		$reports->save();

		return redirect('/tentor/laporan');

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
        $tentor = Tentors::find($id);
        return view('tentor.profile', compact('tentor'));
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

		//dd($request);

		$validate = $request->validate([
			'pictProfile' => 'mimes:jpeg,png,jpg|max:2048',
		]);


        $tentor = Tentors::find($id);
		// dd($request->password, $tentor-> password);
		$tentor->uniqueid = $request->uniqueid ?? $tentor-> uniqueid;
		$tentor->name = $request->name ?? $tentor-> name;
		$tentor->username = $request->username ?? $tentor-> username;
		$tentor->password = (!empty($request->password)) ? bcrypt($request->password) : $tentor-> password;
		$tentor->email = $request->email ?? $tentor-> email;
		$tentor->address = $request->address ?? $tentor-> address;
		$tentor->mapel = $request->mapel ?? $tentor-> mapel;

		if(isset($request->pictProfile)){
			$imageName = $id. '-' . time() . '.' . $request->pictProfile->extension();
            // $request->pictProfile->move('assets/images/tentor', $imageName); // Web Cpanel
			$request->pictProfile->move(public_path('assets/images/tentor'), $imageName);
			$tentor->pict_name = $imageName;
		}

		$tentor->save();

		return redirect('/tentor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

	public function unique_code($limit)
	{
		return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
	}

	public function laporan()
	{
		$id = Auth::id();
		$reports = Reports::where('tentors', $id)->get();
		return view('tentor.laporan', compact('reports'));
	}
}
