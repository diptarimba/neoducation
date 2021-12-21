<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Tentors extends Authenticatable
{
    use Notifiable;
	
	static $resultquiz;

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
	
	public static function resultquiz($id)
	{
		// dd($id);
		$tentor = DB::table('quiztentors')
				->select(DB::raw("
					count('quiztentors.*') as jumlahquiz,
					cast(AVG(quiztentors.ans1 = 'Selalu') as decimal(9,2)) as su1,
					cast(AVG(quiztentors.ans1 = 'Sering') as decimal(9,2)) as se1,
					cast(AVG(quiztentors.ans1 = 'Jarang') as decimal(9,2)) as je1,
					cast(AVG(quiztentors.ans2 = 'Selalu') as decimal(9,2)) as su2,
					cast(AVG(quiztentors.ans2 = 'Sering') as decimal(9,2)) as se2,
					cast(AVG(quiztentors.ans2 = 'Jarang') as decimal(9,2)) as je2,
					cast(AVG(quiztentors.ans3 = 'Selalu') as decimal(9,2)) as su3,
					cast(AVG(quiztentors.ans3 = 'Sering') as decimal(9,2)) as se3,
					cast(AVG(quiztentors.ans3 = 'Jarang') as decimal(9,2)) as je3,
					cast(AVG(quiztentors.ans4 = 'Selalu') as decimal(9,2)) as su4,
					cast(AVG(quiztentors.ans4 = 'Sering') as decimal(9,2)) as se4,
					cast(AVG(quiztentors.ans4 = 'Jarang') as decimal(9,2)) as je4,
					cast(AVG(quiztentors.ans5 = 'Selalu') as decimal(9,2)) as su5,
					cast(AVG(quiztentors.ans5 = 'Sering') as decimal(9,2)) as se5,
					cast(AVG(quiztentors.ans5 = 'Jarang') as decimal(9,2)) as je5,
					cast(AVG(quiztentors.ans6 = 'Selalu') as decimal(9,2)) as su6,
					cast(AVG(quiztentors.ans6 = 'Sering') as decimal(9,2)) as se6,
					cast(AVG(quiztentors.ans6 = 'Jarang') as decimal(9,2)) as je6,
					cast(AVG(quiztentors.ans7 = 'Selalu') as decimal(9,2)) as su7,
					cast(AVG(quiztentors.ans7 = 'Sering') as decimal(9,2)) as se7,
					cast(AVG(quiztentors.ans7 = 'Jarang') as decimal(9,2)) as je7,
					cast(AVG(quiztentors.ans8 = 'Selalu') as decimal(9,2)) as su8,
					cast(AVG(quiztentors.ans8 = 'Sering') as decimal(9,2)) as se8,
					cast(AVG(quiztentors.ans8 = 'Jarang') as decimal(9,2)) as je8,
					cast(AVG(quiztentors.ans9 = 'Selalu') as decimal(9,2)) as su9,
					cast(AVG(quiztentors.ans9 = 'Sering') as decimal(9,2)) as se9,
					cast(AVG(quiztentors.ans9 = 'Jarang') as decimal(9,2)) as je9,
					
					tentors.name as nama_tentor,
					tentors.mapel as mapel_tentor,
					tentors.id as id
				"))
			->join('tentors', function($join){
				$join->on('quiztentors.tentor_id', '=', 'tentors.id');
			})
			->where('quiztentors.tentor_id', $id)
			->whereRaw('MONTH(quiztentors.created_at) = MONTH(CURRENT_DATE())
						AND YEAR(quiztentors.created_at) = YEAR(CURRENT_DATE())')
			->get();
		// dd($tentor);
		return $tentor;
	}
}
