<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = "employees";
    protected $fillable = [
        'first_name', 'last_name', 'username', 'address', 'city', 'country', 'phone', 'image_path', 'email', 'team_id', 'project_id', 'department_id','manager_id', 
    ];

    public function teams()
    {
        return $this->belongsTo(Teams::class, 'team_id', 'id');
    }

}
