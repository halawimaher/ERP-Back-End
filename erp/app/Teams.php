<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $table = "teams";
    protected $fillable = ['name'];

    public function employees_teams()
    {
        return $this->hasMany(Employees_Teams::class, 'employee_id', 'id');
    }
}
