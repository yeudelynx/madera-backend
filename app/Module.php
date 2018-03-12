<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    
    use SoftDeletes;
    protected $fillable = ['prix', 'longueur', 'hauteur', 'largeur', 'distance_sol', 'gamme_id', 'categorie_id' ];
	protected $hidden = [];
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}