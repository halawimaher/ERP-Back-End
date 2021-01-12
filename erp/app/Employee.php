<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = "employees";
    protected $fillable = [
        'first_name', 'last_name', 'phone', 'image_path', 'email', 
    ];
    public $timestamps = false;
}