<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = "employees";
    protected $fillable = [
        'first_name', 'last_name', 'username', 'address', 'city', 'country', 'phone', 'image_path', 'email'
    ];

    public $timestamps = false;



    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function team()
    {
        return $this->belongsToMany(Teams::class, 'employees_teams',
            'employee_id', 'team_id');
    }
    public function role()
    {
        return $this->hasMany(Employees_Teams::class,'employee_id','id');
    }
    public function project()
    {
        return $this->belongsToMany(Project::class, 'employees_teams',
            'employee_id', 'project_id');
    }
    public function kpi()
    {
        return $this->hasMany(Kpis::class,'employee_id','id');
    }



}
