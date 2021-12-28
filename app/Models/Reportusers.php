<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Reportusers extends Model
{
	public function tentor(){
        return $this->belongsTo('\App\Models\Tentors', 'id');
    }
    public function student(){
        return $this->belongsTo('\App\Models\Students', 'students', 'id' );
    }

    public function getPaid($waktu = null){
		if($waktu == null){
			$query = DB::table('reportusers')
				->select(DB::raw('SUM(biaya) as tbiaya'))
				->where('status_bayar', 'paid')
				->whereRaw('MONTH(`created_at`) = MONTH(CURRENT_DATE()) AND YEAR(`created_at`) = YEAR(CURRENT_DATE())')
				->get();
		}else{
			$query = DB::table('reportusers')
				->select(DB::raw('SUM(biaya) as tbiaya'))
				->where('status_bayar', 'paid')
				->get();
		}
		return $query;
	}

	public function getUnpaid($waktu = null){
		if($waktu == null){
		$query = DB::table('reportusers')
				->select(DB::raw('SUM(biaya) as tbiaya'))
				->where('status_bayar', 'unpaid')
				->whereRaw('MONTH(`created_at`) = MONTH(CURRENT_DATE()) AND YEAR(`created_at`) = YEAR(CURRENT_DATE())')
				->get();
		}else{
		$query = DB::table('reportusers')
				->select(DB::raw('SUM(biaya) as tbiaya'))
				->where('status_bayar', 'unpaid')
				->get();

		}
		return $query;
	}

	public function Total(){
		$query = DB::table('reportusers')
				->select(DB::raw('SUM(biaya) as tbiaya'))
				->get();
		return $query;
	}
}
