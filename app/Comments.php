<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model {

	//
	protected $table = 'comments';
	

 
      public function post()
    {
        return $this->belongsTo('App\Posts','postid');
    }

       public function user()
    {
        return $this->belongsTo('App\User','userid');
    }

      public function replycomments()
    {
        return $this->hasMany('App\Replycomments', 'commentid');
    }

}
