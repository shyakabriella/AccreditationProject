<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['school_id', 'name', 'dob', 'student_number'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function portfolio()
    {
        return $this->hasOne(Portfolio::class);
    }
}

