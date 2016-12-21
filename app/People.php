<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    //
    protected $fillable = [
        'name', 'carear','age','age_unit','age_group','gender','description'
    ];
}
