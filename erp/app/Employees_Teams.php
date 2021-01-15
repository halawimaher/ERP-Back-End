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
        "employee_id"
    ];

}
