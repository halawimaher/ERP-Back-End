<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kpis extends Model
{
    //
    protected $table = 'kpis';
    protected $fillable = [
        'name', 'min_value', 'max_value', 'created'
    ];
    public $timestamps = false;
}
