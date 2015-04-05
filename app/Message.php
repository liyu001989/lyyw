<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model {

	//默认使用类名小写的复数
    //protected $table = 'messages';

	public function user()
    {
        return $this->belongsTo('App\User');
    }

}
