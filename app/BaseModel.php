<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dateFormat = 'Y-m-d H:i:s.u';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
