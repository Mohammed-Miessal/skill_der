<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Announcement extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['title', 'description', 'content', 'image', 'company_id'];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function skills(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }


    // public function users(): BelongsToMany
    // {
    //     return $this->belongsToMany(Announcement::class);
    // }


    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }



}
