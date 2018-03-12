<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couleur extends Model
{
    
    use SoftDeletes;
    protected $fillable = ['lib_couleur', 'code_couleur', ];
	protected $hidden = [];
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
