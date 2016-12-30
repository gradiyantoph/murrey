<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price',
    ];
    
    /**
     * Relations
     */
	public function rents()
	{
		return $this->belongsToMany('App\Rent');
	}
}
