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

public function team_roles()
{
return $this->belongsToMany(Project::class, 'employees_teams_roles', 'role_id', 'team_id', 'employee_id');
}

}
