<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Constituer extends Model
{
    use SoftDeletes;    
    protected $fillable = ['x_pos', 'y_pos', 'z_pos', 'etage_plan', 'prix_module', 'module_id', 'devis_id', 'couleur_id', 'matiere_id', 'unite_id', ];
	protected $hidden = [];
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}