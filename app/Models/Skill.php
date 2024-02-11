<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use HasFactory , SoftDeletes;

    protected $fillable = ['name'];

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function announcements() {
        return $this->belongsToMany(Announcement::class);
    }

}
