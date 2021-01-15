<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
    protected $table = "roles";
    protected $fillable = [
        'name', 
    ];

    public function employees()
{
return $this->hasMany(Employees::class, 'role_id', 'id');
}

public function projects()
{
return $this->belongsToMany(Project::class, 'employees_projects_roles', 'project_id', 'employee_id', 'role_id');
}

}
