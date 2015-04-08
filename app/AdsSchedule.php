<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AdsSchedule extends Model {

	protected $fillable = ['ads_id'];

	public static function open(array $attribute)
	{
		return new static($attribute);
	}
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
