<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees_Kpis extends Model
{
    protected $table = "employees_kpis";
    protected $fillable= [
        'evaluation',
        'employee_id',
        'kpi_id'
    ];
}
