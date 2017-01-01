<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
    
    /**
     * Relations
     */
	public function tables()
	{
		return $this->hasMany('App\Table');
	}
	public function stocks()
	{
		return $this->hasMany('App\Stock');
	}
}
