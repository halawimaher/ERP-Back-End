<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams_Projects extends Model
{
    protected $table = "teams_projects";
    protected $fillable = [
        'project_id',
        'team_id'
    ];
}
