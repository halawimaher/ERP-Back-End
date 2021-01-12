<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kpis extends Model
{
    //
    protected $table = 'kpis';
    protected $fillable = [
        'name', 'created'
    ];
    public $timestamps = false;
}
