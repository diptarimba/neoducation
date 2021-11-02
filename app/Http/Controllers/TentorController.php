<?php

namespace App\Http\Controllers;

use App\Models\Tentors;
use App\Models\Students;
use App\Models\Reportusers;
use App\Models\Reports;
use App\Models\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$tentor = Tentors::find("1");
        return view('tentor.home', compact('tentor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$tentor = Tentors::find("1");
		$siswa = Students::select(array('id', 'name', 'package'))->get();
        return view('tentor.presensi', compact(['siswa','tentor']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		//dd(count($request->peserta));
		
        $validatedData = $request->validate([
			'topic' => 'required|min:5|max:255',
			'tempat' => 'required|min:5|max:255',
			'tanggal' => 'required',
			'idtentor' => 'required',
			'mapel' => 'required',
			'peserta' => 'required'
		]);
		
		$hash = $this->unique_code(10);
		
		foreach($request->peserta as $each_peserta){
			$reportusers = new Reportusers;
			$reportusers->topic = $request->topic;
			$reportusers->place = $request->tempat;
			$reportusers->tentors = $request->idtentor;
			$reportusers->mapel = $request->mapel;
			$reportusers->date_exec = $request->tanggal;
			$reportusers->hash = $hash;
			$reportusers->status_bayar = 'Belum diBayar';
			$reportusers->students = $each_peserta;
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
        $tentor = Tentors::find($id);
		$tentor->name = $request->name;
		$tentor->username = $request->username;
		$tentor->email = $request->email;
		$tentor->address = $request->address;
		$tentor->mapel = $request->mapel;
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
	
	public function laporan($id = null)
	{
		$id = 1;
		$reports = Reports::where('tentors', $id)->get();
		return view('tentor.laporan', compact('reports'));
	}
}
