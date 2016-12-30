<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rent extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'table_id',
    ];
    
    protected $dates = [
        'deleted_at',
    ];
    
    /**
     * Relations
     */
    public function table()
	{
		return $this->belongsTo('App\Table');
	}
	public function transaction()
	{
		return $this->hasOne('App\Transaction');
	}
    public function fares()
    {
        return $this->belongsToMany('App\Fare');
    }
}
