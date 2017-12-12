<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model {

	//
	protected $table = 'authors';
	
	  public function posts()
    {
        return $this->hasMany('App\Posts', 'authorid');
    }

}
