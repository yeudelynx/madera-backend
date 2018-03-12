<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamme extends Model
{
    
    use SoftDeletes;
    protected $fillable = ['lib_gamme', 'remise_id', ];
	protected $hidden = [];
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
