<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remise extends Model
{
    
    protected $fillable = ['valeur_remise', 'lib_remise', ];
	protected $hidden = [];

	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
