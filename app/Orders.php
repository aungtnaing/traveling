<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model {

	//
	protected $table = 'orders';
	


    public function user()
    {
        return $this->belongsTo('App\User','userid');
    }



  
}
