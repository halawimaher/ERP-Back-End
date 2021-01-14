<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $table = "teams";
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function projects()
    {
    return $this->belongsToMany(Project::class, 'teams_projects', 'team_id', 'project_id');
    }

    public function employees()
    {
    return $this->hasMany(Employees::class, 'team_id', 'id');
    }
}
