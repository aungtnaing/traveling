<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pictures extends Model {

	//
	protected $table = 'pictures';
	

   public function user()
    {
        return $this->belongsTo('App\User','userid');
    }

  
}
