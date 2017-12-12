<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model {

	//
	protected $table = 'posts';
	

	public function category()
    {
        return $this->belongsTo('App\Category','categoryid');
    }

    public function user()
    {
        return $this->belongsTo('App\User','userid');
    }

     public function author()
    {
        return $this->belongsTo('App\Authors','authorid');
    }

     public function comments()
    {
        return $this->hasMany('App\Comments', 'postid');
    }


  
}
