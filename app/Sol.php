<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sol extends Model
{
    
    use SoftDeletes;
    protected $fillable = ['image_sol', 'longueur', 'largeur', 'list_points_sol', ];
	protected $hidden = [];
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
