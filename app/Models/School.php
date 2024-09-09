<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'contact', 'status', 'rtb_id'];

    public function rtb()
    {
        return $this->belongsTo(User::class, 'rtb_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function accreditationApplications()
    {
        return $this->hasMany(AccreditationApplication::class);
    }
}

