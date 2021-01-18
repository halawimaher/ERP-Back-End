<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kpis extends Model
{
    //
    protected $table = 'kpis';
    protected $fillable = ['name', 'min_value', 'max_value',  'description', 'employee_id'];

    public $timestamps = false;

//    public function kpi()
//    {
//        return $this->hasMany(Employees::class,'id','employee_id');
//    }
}
