<?php

namespace App\Http\Controllers;

use App\Models\Tentors;
use App\Models\Mapels;
use App\Models\Quiztentors;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageTentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tentor = Tentors::get();
		//print_r($tentor);
		return view('administrator.tentor.home', compact('tentor'));
		//return view('administrator.tentor.home', compact('tentor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$mapel = Mapels::all();
        return view('administrator.tentor.tambah', compact('mapel'));
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
			'mapel' => 'required',
		]);
		
		$tentor = new Tentors;
		$tentor->uniqueid = $request->uniqueid;
		$tentor->name = $request->name;
		$tentor->username = $request->username;
		$tentor->password = bcrypt($request->password);
		$tentor->email = $request->email;
		$tentor->pict_name = 'default.jpg';
		$tentor->address = $request->address;
		$tentor->mapel = $request->mapel;
		$tentor->phone = $request->nohp;
		$tentor->save();
		
		return redirect('/managetentor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tentor = Tentors::find($id);
		return view('administrator.tentor.show', compact('tentor'));
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
		$mapel = Mapels::all();
		return view('administrator.tentor.update', compact('tentor','mapel'));
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
			'name' => 'required',
		]);
		
        $tentor = Tentors::find($id);
		$tentor->uniqueid = $request->uniqueid ?? $tentor-> uniqueid;
		$tentor->name = $request->name ?? $tentor-> name;
		$tentor->username = $request->username ?? $tentor-> username;
		$tentor->password = bcrypt($request->password) ?? $tentor-> password;
		$tentor->email = $request->email ?? $tentor-> email;
		$tentor->address = $request->address ?? $tentor-> address;
		$tentor->mapel = $request->mapel ?? $tentor-> mapel;
		$tentor->phone = $request->phone ?? $tentor-> phone;
		$tentor->save();
		
		return redirect('/managetentor/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tentors::find($id)->delete();
		return redirect('/managetentor');
    }
	
	public function resetpass($id)
	{
		$tentor = Tentors::find($id);
		$tentor->password = bcrypt('12345678');
		$tentor->save();
		return redirect('/managetentor/'.$id)->with('status', 'Passsowrd Berhasil di Reset');
	}
	
	public function tentorquiz($id)
	{
		// dd($id);
		// $row = Quiztentors::where('tentor_id', $id)->get();
		$data = Tentors::resultquiz($id);
		$ask = ["",
		"Tentor hadir sesuai kesepakatan",
		"Tentor komunikatif",
		"Tentor berpenampilan rapi",
		"Penjelasan Tentor mudah dipahami",
		"Tentor bisa menjadi teladan bagi siswa",
		"Tentor bisa menjelaskan materi",
		"Tentor bisa membantu menyelesaikan PR",
		"Tentor mampu memotivasi siswa",
		"Tentor mampu mendukung prestasi siswa? "
		];
		// dd($data);
		return view('administrator.tentor.kuisioner', compact('data','ask'));
	}
}
