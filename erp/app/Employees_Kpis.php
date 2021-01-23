<?php

namespace App;
use App\Employees;

use Illuminate\Database\Eloquent\Model;

class Employees_Kpis extends Model
{
    protected $table = "kpis";
    protected $fillable= [
        'evaluation',
        'employee_id',
        'kpi_id'
    ];

    public function employee()
    {
        return $this->belongsTo(Employees::class);
    }
}
