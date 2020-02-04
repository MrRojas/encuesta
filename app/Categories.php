<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
   // use SoftDeletes;

    protected $table = 'categories';

    protected $fillable = [
        'id',
        'name',
        'address',
        'status',
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
