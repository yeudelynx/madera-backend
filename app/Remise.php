<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Remise extends Model
{
    
    use SoftDeletes;
    protected $fillable = ['valeur_remise', 'lib_remise', ];
	protected $hidden = [];

	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
