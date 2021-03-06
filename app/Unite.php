<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Unite extends Model
{
    use SoftDeletes;
    protected $fillable = ['symbole', 'lib_unite'];
	protected $hidden = [];
	
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
