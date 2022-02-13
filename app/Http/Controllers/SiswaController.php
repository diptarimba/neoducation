<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Quiztentors;
use App\Models\Configs;
use App\Models\Reportusers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

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
		$id = Auth::id();
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
		//dd($request->pictProfile);

		$validate = $request->validate([
			'pictProfile' => 'mimes:jpeg,png,jpg|max:2048',
		]);

        $siswa = Students::find($id);
		$siswa->username = $request->Username ?? $siswa-> username;
		$siswa->email = $request->Email ?? $siswa-> email;
		$siswa->password = (!empty($request->password)) ? bcrypt($request->password) : $siswa-> password;
		$siswa->name = $request->NamaSiswa ?? $siswa-> name;
		$siswa->parent_name = $request->NamaOrtu ?? $siswa-> parent_name;
		$siswa->address = $request->Address ?? $siswa-> address;

		if(isset($request->pictProfile)){
			$imageName = $id. '-' . time() . '.' . $request->pictProfile->extension();
            // $request->pictProfile->move('assets/images/siswa', $imageName); //Buat Web Cpanel
			$request->pictProfile->move(public_path('assets/images/siswa'), $imageName);
			$siswa->pict_name = $imageName;
		}

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
		$id = Auth::id();
		$siswa = Students::find($id);
		$datahadir = Reportusers::where('students', $id)->get();
		$total = Reportusers::where('students', $id)->where('status_bayar', 'unpaid')->sum('biaya');
		return view('siswa.invoice', compact(['siswa', 'datahadir', 'total']));
	}

	public function quiz()
	{
		$ValidateQuiz = Configs::checkCurrentConfigs('quizsiswa');
		$students = new Students;
		$listtentor = $students->getQuizList(Auth::id());

		// if(count($ValidateQuiz)){
		if(isset($ValidateQuiz->keyparams) && $ValidateQuiz->keyparams == 'quizsiswa'){
			return view('siswa.quiz', compact('listtentor'));
		}else{
			return view('siswa.quiz');
		}
	}

	public function quizupdate(Request $request){
		// dd($request);

		$validate = $request->validate([
			'ans.user' => 'required',
			'ans.tentor' => 'required',
			'ans.1' => 'required',
			'ans.2' => 'required',
			'ans.3' => 'required',
			'ans.4' => 'required',
			'ans.5' => 'required',
			'ans.6' => 'required',
			'ans.7' => 'required',
			'ans.8' => 'required',
			'ans.9' => 'required',
		]);

		$qtentor = new Quiztentors;
		$qtentor->tentor_id = $request->ans['tentor'];
		$qtentor->siswa_id = $request->ans['user'];
		$qtentor->ans1 = $request->ans['1'];
		$qtentor->ans2 = $request->ans['2'];
		$qtentor->ans3 = $request->ans['3'];
		$qtentor->ans4 = $request->ans['4'];
		$qtentor->ans5 = $request->ans['5'];
		$qtentor->ans6 = $request->ans['6'];
		$qtentor->ans7 = $request->ans['7'];
		$qtentor->ans8 = $request->ans['8'];
		$qtentor->ans9 = $request->ans['9'];
		$qtentor->save();

		return redirect('/siswa/quiz');
	}

	public function quizresult()
	{
		$id = Auth::id();
		$students = new Students;
		$ValidateQuiz = Configs::checkCurrentConfigs('rapot');
		//$belajarakif = $students->getResultList($id);
		$name = Auth::user()->name;
		if(isset($ValidateQuiz->keyparams) && $ValidateQuiz->keyparams == 'rapot'){
			$result = $students->getQuizResult($id);
			return view('siswa.result', compact('result', 'name'));
		}else{
			$result = $students->getQuizResult($id);
			return view('siswa.result');
		}
	}
}
