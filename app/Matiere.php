<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    
    protected $fillable = ['lib_matiere', ];
	protected $hidden = [];
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
