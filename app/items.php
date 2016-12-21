<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    //
    public $fillable = ['package_no','title','taric_code','qty','weight','','price'];
}
