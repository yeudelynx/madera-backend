<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magasin extends Model
{
    
    use SoftDeletes;
    protected $fillable = ['adresse', 'lib_magasin', ];
	protected $hidden = [];
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
