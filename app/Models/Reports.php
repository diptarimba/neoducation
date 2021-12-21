<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
	
	protected $fillable = [
        'tentors', 'hash', 'students', 'place', 'topic', 'date_exec'
    ];
	
    public function tentor(){
        return $this->belongsTo('\App\Models\Tentors', 'tentors'); 
    }
}
