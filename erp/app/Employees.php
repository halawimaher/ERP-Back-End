<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = "employees";
    protected $fillable = [
        'first_name', 'last_name', 'username', 'address', 'city', 'country', 'phone', 'image_path', 'email', 'team_id', 'department_id','manager_id', 
    ];

    public $timestamps = false;
    public function teams()
    {
        return $this->belongsTo(Teams::class, 'team_id', 'id');
    }

    public function team_roles()
{
return $this->belongsToMany(Project::class, 'employees_teams_roles', 'employee_id', 'team_id', 'role_id');
}

}
