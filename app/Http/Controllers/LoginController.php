<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	
	//public $dataPagePage;
	
	
    public function tentorForm()
	{
		if (Auth::guard('tentor')->check()) {
			return redirect('/tentor');
		}
		
		$dataPage = (object) [];
		$dataPage->title = 'Login Tentor';
		$dataPage->name = 'Login Tentor';
		$dataPage->link = '/login/tentor';
		return view('login', compact('dataPage'));
	}
	
	public function siswaForm()
	{
		if (Auth::guard('siswa')->check()) {
			return redirect('/siswa');
		}
		
		$dataPage = (object) [];
		$dataPage->title = 'Login Siswa';
		$dataPage->name = 'Login Siswa';
		$dataPage->link = '/login/siswa';
		return view('login', compact('dataPage'));
	}
	
	public function adminForm()
	{
		if (Auth::guard('admin')->check()) {
			return redirect('/admin');
		}
		
		$dataPage = (object) [];
		$dataPage->title = 'Login Admin';
		$dataPage->name = 'Login Admin';
		$dataPage->link = '/administrator';
		return view('login', compact('dataPage'));
	}
	
	private function validator(Request $request)
	{
		//validation rules.
		$rules = [
			'username'    => 'required|string|min:5|max:191',
			'password' => 'required|string|min:4|max:255',
		];
	
		//custom validation error messages.
		//$messages = [
		//	'username.exists' => 'Tidak ada data yang cocok dengan database kami!',
		//];
	
		//validate the request.
		$request->validate($rules);
	}
	
	private function loginFailed(){
		return redirect()
			->back()
			->withInput()
			->with('error','Silahkan coba kembali nanti.');
	}
	
	public function loginTentor(Request $request)
	{
		$this->validator($request);
		// dd($request);
		if(Auth::guard('tentor')->attempt(
		[
			'username' => $request->username,
			'password' => $request->password
		] , $request->filled('remember')))
		{
			//Authentication passed...
			return redirect()
				->intended(route('tentor.index'))
				//->intended('/tentor')
				->with('status','Sukses Login Sebagai Tentor!');
		}
	
		//Authentication failed...
		return $this->loginFailed();
	}
	
	public function loginSiswa(Request $request)
	{
		//dd($request);
		$this->validator($request);

		if(Auth::guard('siswa')->attempt(
		[
			'username' => $request->username,
			'password' => $request->password
		] ,$request->filled('remember')))
		{
			
			//Authentication passed...
			return redirect()
				->intended(route('siswa.index'))
				//->intended(route('/siswa'))
				->with('status','Sukses Login Sebagai Siswa!');
		}
	
		//Authentication failed...
		return $this->loginFailed();
	}
	
	public function loginAdmin(Request $request)
	{
		//dd($request);
		$this->validator($request);

		if(Auth::guard('admin')->attempt(
		[
			'username' => $request->username,
			'password' => $request->password
		] ,$request->filled('remember')))
		{
			
			//Authentication passed...
			return redirect()
				->intended(route('admin.index'))
				//->intended(route('/siswa'))
				->with('status','Sukses Login Sebagai Admin!');
		}
	
		//Authentication failed...
		return $this->loginFailed();
	}
	
	public function postLogout()
    {
		
		
		
        if (Auth::guard('siswa')->check()) {
			Auth::guard('siswa')->logout();
			session()->flush();
			return redirect('/login/siswa');
		} elseif (Auth::guard('tentor')->check()) {
			Auth::guard('tentor')->logout();
			session()->flush();
			return redirect('/login/tentor');
		}elseif (Auth::guard('admin')->check()) {
			Auth::guard('admin')->logout();
			session()->flush();
			return redirect('/administrator');
		}
		
		
    }
	
	
}
