<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table= 'projects';
    protected $fillable= [
        'name'
    ];
    public $timestamps = false;
    public function teams()
    {
    return $this->belongsToMany(Teams::class, 'teams_projects', 'project_id', 'team_id');
    }
}
