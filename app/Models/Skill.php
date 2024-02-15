<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use HasFactory,  SoftDeletes;

    protected $fillable = ['name'];


    // ! Relationship between Skill and Announcement Models
    public function announcements()
    {
        return $this->belongsToMany(Announcement::class);
    }

    // ! Relationship between Skill and User Models
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
