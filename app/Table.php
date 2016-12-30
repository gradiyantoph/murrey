<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'store_id', 'number',
    ];
    
    /**
     * Relations
     */
    public function store()
	{
		return $this->belongsTo('App\Store');
	}
	public function rents()
	{
		return $this->hasMany('App\Rent');
	}
}
