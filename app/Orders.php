<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class orders extends Model
{
    //
    protected $fillable = [
        'name', 'price','username'
    ];
    
}
