<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderstemp extends Model {

	//
	protected $table = 'orderstemp';
	


    public function user()
    {
        return $this->belongsTo('App\User','userid');
    }



  
}
