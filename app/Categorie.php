<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    use SoftDeletes;
    protected $fillable = ['lib_categorie', ];
	protected $hidden = [];

	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
