<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Replycomments extends Model {

	//
	protected $table = 'replycomments';
	

 
      public function comment()
    {
        return $this->belongsTo('App\Comments','commentid');
    }

       public function user()
    {
        return $this->belongsTo('App\User','userid');
    }

}
