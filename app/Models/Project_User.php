<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Project_User extends Pivot
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'user_id',
     ];

 

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function project()
    {
        return $this->belongsTo(User::class , 'project_id');
    }
}
