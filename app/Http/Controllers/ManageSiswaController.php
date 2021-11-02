<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Reportusers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Students::all();
		return view('administrator.siswa.home', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.siswa.tambah');
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
			'username' => 'required|min:5',
			'password' => 'required|min:8',
			'name' => 'required',
			'parentName' => 'required',
			'email' => 'required',
			'address' => 'required',
			'package' => 'required',
			'phone' => 'required|min:10'
		]);
		
		$siswa = new Students;
		$siswa->username = $request->username;
		$siswa->password = $request->password;
		$siswa->email = $request->email;
		$siswa->name = $request->name;
		$siswa->parent_name = $request->parentName;
		$siswa->address = $request->address;
		$siswa->phone = $request->phone;
		$siswa->package = $request->package;
		$siswa->save();
		
		return redirect('/managesiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Students::find($id);
		return view('administrator.siswa.show', compact('siswa'));
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
		return view('administrator.siswa.update', compact('siswa'));
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
         $validate = $request->validate([
			'username' => 'required|min:5',
			'password' => 'required|min:8',
			'name' => 'required',
			'parentName' => 'required',
			'email' => 'required',
			'address' => 'required',
			'package' => 'required',
			'phone' => 'required|min:10'
		]);
		
		$siswa = Students::find($id);
		$siswa->username = $request->username;
		$siswa->password = $request->password;
		$siswa->email = $request->email;
		$siswa->name = $request->name;
		$siswa->parent_name = $request->parentName;
		$siswa->address = $request->address;
		$siswa->phone = $request->phone;
		$siswa->package = $request->package;
		$siswa->save();
		
		return redirect('/managesiswa/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Students::find($id)->delete();
		return redirect('/managesiswa/');
    }
	
	public function showinvoice($id)
	{
		$siswa = Students::find($id);
		$kehadiran = Reportusers::where('students', $id)->get();
		//dd($kehadiran);
		return view('administrator.siswa.invoice', compact(['siswa', 'kehadiran']));
		
	}
	
	public function printinvoice(Request $request, $id)
	{
		
		$siswa = Students::find($id);
		$dataInvoice = [];
		foreach($request->hash as $each){
			$dataInvoice[] = Reportusers::where('hash', $each)->get();
		}
		return view('administrator.siswa.printinvoice', compact(['dataInvoice', 'siswa']));
	}
}
