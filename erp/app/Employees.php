<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = "employees";
    protected $fillable = [
        'first_name', 'last_name', 'username', 'address', 'city', 'country', 'phone', 'image_path', 'email', 'team_id', 'department_id', 'role_id', 'manager_id', 
    ];
}
