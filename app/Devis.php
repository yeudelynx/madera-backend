<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    
    protected $fillable = [ 'is_sync', 'orientation', 'client_id', 'user_id', 'sol_id', ];
	protected $hidden = [];

	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
