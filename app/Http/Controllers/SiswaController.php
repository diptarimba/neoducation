<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Reportusers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data_siswa = DB::table('tb_Siswa')->get();
		//$siswa = Students::all();
		$id = 2;
		$siswa = Students::find($id);
		$datahadir = Reportusers::where('students', $id)->get();
		return view('siswa.home', compact(['siswa', 'datahadir']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
		
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Students::find($id);
		return view('siswa.profile', compact('siswa'));
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
        $siswa = Students::find($id);
		$siswa->username = $request->Username;
		$siswa->email = $request->Email;
		$siswa->name = $request->NamaSiswa;
		$siswa->parent_name = $request->NamaOrtu;
		$siswa->address = $request->Address;
		$siswa->save();
		
		return redirect('/siswa');
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
	
	public function invoice($id = null)
	{
		$id = 2;
		$siswa = Students::find($id);
		$datahadir = Reportusers::where('students', $id)->get();
		return view('siswa.invoice', compact(['siswa', 'datahadir']));
	}
}
