<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees_Teams extends Model
{
    //
    protected $table = "employees_teams";
    protected $fillable = [
        "role",
        "team_id",
        "employee_id",
        "project_id"
    ];
    public $timestamps =false;
    public function employees_teams()
    {
        return $this->hasMany(Employees_Teams::class, 'employee_id', 'id');
    }

}
