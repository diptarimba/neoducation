<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Students extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	function getQuizList($id)
	{

		$tentor = DB::table('reportusers')
						->join('tentors', function($join){
							$join->on('reportusers.tentors', '=', 'tentors.id');
						})
						->where('reportusers.students', $id)
						->whereRaw('reportusers.tentors NOT IN (
							SELECT tentor_id
							FROM quiztentors
							WHERE MONTH(`created_at`) = MONTH(CURRENT_DATE())
								AND YEAR(`created_at`) = YEAR(CURRENT_DATE())
								AND siswa_id = '.$id.' )')
						->groupBy('reportusers.tentors')
						->get(['name','tentors']);
		//dd($tentor);
		return $tentor;
	}

	function getResultList($id)
	{

		$result = DB::table('reportusers')
						->join('tentors', function($join){
							$join->on('reportusers.tentors', '=', 'tentors.id');
						})
						->where('reportusers.students', $id)
						->whereRaw('MONTH(reportusers.created_at) = MONTH(CURRENT_DATE())
									AND YEAR(reportusers.created_at) = YEAR(CURRENT_DATE())')
						->groupBy('reportusers.tentors')
						->get(['name','tentors','tentors.mapel']);
		//dd($result);
		return $result;
	}

	function getQuizResult($id)
	{
		$getid = $this->getResultList($id);
		//dd($getid->0->tentors);
		$result = [];
		//	foreach($getid as $each_getid){
		//		$result[] = DB::table('quizsiswas')
		//					->where('siswa_id', $id)
		//					->where('tentor_id', $each_getid->tentors)
		//					->whereRaw('MONTH(created_at) = MONTH(CURRENT_DATE())
		//								AND YEAR(created_at) = YEAR(CURRENT_DATE())')
		//					//->groupBy('reportusers.tentors')
		//					->get();
		//					//->get(['name','tentors','tentors.mapel']);
		//	}
		foreach($getid as $each_getid){
			$result[] = DB::table('quizsiswas')
			->select(DB::raw("
								count('quizsiswas.*') as sum_meet,
								cast(AVG(quizsiswas.ans1 = 'Ya') as decimal(9,2)) as avg1,
								cast(AVG(quizsiswas.ans2 = 'Ya') as decimal(9,2)) as avg2,
								cast(AVG(quizsiswas.ans3 = 'Ya') as decimal(9,2)) as avg3,
								cast(AVG(quizsiswas.ans4 = 'Ya') as decimal(9,2)) as avg4,
								cast(AVG(quizsiswas.ans5 = 'Ya') as decimal(9,2)) as avg5,
								cast(AVG(quizsiswas.ans6 = 'Ya') as decimal(9,2)) as avg6,
								cast(AVG(quizsiswas.ans7 = 'Ya') as decimal(9,2)) as avg7,
								cast(AVG(quizsiswas.ans8 = 'Tidak') as decimal(9,2)) as avg8,
								cast(AVG(quizsiswas.ans9 = 'Tidak') as decimal(9,2)) as avg9,
								cast(AVG(quizsiswas.ans10 = 'Tidak') as decimal(9,2)) as avg10,
								cast(AVG(nilai) as decimal(9,2)) as nilai,

                                ".
								//SUM(case when quizsiswas.ans1 = 'Ya' then 1 else 0 end) as ans1,
								//SUM(case when quizsiswas.ans2 = 'Ya' then 1 else 0 end) as ans2,
								//SUM(case when quizsiswas.ans3 = 'Ya' then 1 else 0 end) as ans3,
								//SUM(case when quizsiswas.ans4 = 'Ya' then 1 else 0 end) as ans4,
								//SUM(case when quizsiswas.ans5 = 'Ya' then 1 else 0 end) as ans5,
								//SUM(case when quizsiswas.ans6 = 'Ya' then 1 else 0 end) as ans6,
								//SUM(case when quizsiswas.ans7 = 'Ya' then 1 else 0 end) as ans7,
								//SUM(case when quizsiswas.ans8 = 'Tidak' then 1 else 0 end) as ans8,
								//SUM(case when quizsiswas.ans9 = 'Tidak' then 1 else 0 end) as ans9,
								//SUM(case when quizsiswas.ans10 = 'Tidak' then 1 else 0 end) as ans10,


								"quizsiswas.ans8 as arrs8,
								quizsiswas.ans9 as arrs9,
								quizsiswas.ans10 as arrs10,
								quizsiswas.siswa_id as Siswa_id,
								quizsiswas.tentor_id as Tentor_id,
								tentors.name as Tentor_name,
								tentors.mapel as Tentor_mapel
							"))
						->join('tentors', function($join){
							$join->on('quizsiswas.tentor_id', '=', 'tentors.id');
						})
						->where('quizsiswas.siswa_id', $id)
						->where('quizsiswas.tentor_id', $each_getid->tentors)
						->whereRaw('MONTH(quizsiswas.created_at) = MONTH(CURRENT_DATE())
									AND YEAR(quizsiswas.created_at) = YEAR(CURRENT_DATE())')
						->get();
		}
		//dd($result);
		return $result;
	}

    public function reportuser()
    {
        return $this->hasMany('\App\Models\Reportusers');
    }
}
