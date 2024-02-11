<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'image'];

    // Relationship with the Announcement model
    public function announcements()
    {
        return $this->hasMany(Announcement::class, 'company_id');
    }
}
