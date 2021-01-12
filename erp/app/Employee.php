<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = "employees";
    protected $fillable = [
<<<<<<< HEAD
        'first_name', 'last_name', 'phone', 'image_path', 'email', 
=======
        'first_name', 'last_name', 'phone', 'email'
>>>>>>> dbbcc04ca8c0c00b4e92ce37601a491040210a68
    ];
    public $timestamps = false;
}
