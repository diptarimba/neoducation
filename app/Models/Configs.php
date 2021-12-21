<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Configs extends Model
{
	static $checkCurrentConfigs;
	static $DeleteExistConfig;
	
    public static function checkCurrentConfigs($field = null)
	{
		if($field !== null){
			$query = DB::table('configs')
				->where('keyparams', $field)
				->whereRaw('MONTH(`created_at`) = MONTH(CURRENT_DATE()) AND YEAR(`created_at`) = YEAR(CURRENT_DATE())')
				->first();
		}else{
			$query = DB::table('configs')
				->whereRaw('MONTH(`created_at`) = MONTH(CURRENT_DATE()) AND YEAR(`created_at`) = YEAR(CURRENT_DATE())')
				->orderBy('keyparams', 'ASC')->get();
		}
			
		return $query;
	}
	
	public static function DeleteExistConfig($field)
	{
		$query = DB::table('configs')
			->where('keyparams', $field)
			->whereRaw('MONTH(`created_at`) = MONTH(CURRENT_DATE()) AND YEAR(`created_at`) = YEAR(CURRENT_DATE())')
			->delete();
			
		return $query;
	}
	
}
