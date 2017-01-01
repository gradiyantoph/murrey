<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'store_id', 'fnb_id',
    ];

    /**
     * Relations
     */
	public function store()
	{
		return $this->belongsTo('App\Store');
	}
	public function fnb()
	{
		return $this->belongsTo('App\Fnb');
	}
	public function transactions()
	{
		return $this->belongsToMany('App\Transaction');
	}
}
