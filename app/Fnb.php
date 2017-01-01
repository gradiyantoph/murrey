<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fnb extends Model
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
	public function stocks()
	{
		return $this->hasMany('App\Stock');
	}
}
