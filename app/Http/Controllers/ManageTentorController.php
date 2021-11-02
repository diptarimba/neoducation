<?php

namespace App\Http\Controllers;

use App\Models\Tentors;
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
        return view('administrator.tentor.tambah');
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
			'email' => 'required',
			'address' => 'required',
			'mapel' => 'required',
			'nohp' => 'required|min:10'
		]);
		
		$tentor = new Tentors;
		$tentor->name = $request->name;
		$tentor->username = $request->username;
		$tentor->password = $request->password;
		$tentor->email = $request->email;
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
		return view('administrator.tentor.update', compact('tentor'));
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
			'email' => 'required',
			'address' => 'required',
			'mapel' => 'required',
			'nohp' => 'required|min:10'
		]);
		
        $tentor = Tentors::find($id);
		$tentor->name = $request->name;
		$tentor->username = $request->username;
		$tentor->password = $request->password;
		$tentor->email = $request->email;
		$tentor->address = $request->address;
		$tentor->mapel = $request->mapel;
		$tentor->phone = $request->nohp;
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
}
