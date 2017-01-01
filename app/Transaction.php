<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_name', 'rent_id', 'user_id',
    ];
    
    /**
     * Relations
     */
    public function rent()
	{
		return $this->belongsTo('App\Rent');
	}
	public function user()
	{
		return $this->belongsTo('App\User');
	}
    public function stocks()
    {
        return $this->belongsToMany('App\Stock');
    }
}
