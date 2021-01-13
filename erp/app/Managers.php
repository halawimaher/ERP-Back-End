<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
    //
    protected $table = "managers";
    protected $fillable = [
        'name', 
    ];
}
