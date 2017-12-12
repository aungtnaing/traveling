<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model {

	//
	protected $table = 'votes';
	

 
      public function post()
    {
        return $this->belongsTo('App\Posts','postid');
    }

       public function user()
    {
        return $this->belongsTo('App\User','userid');
    }

     

}
