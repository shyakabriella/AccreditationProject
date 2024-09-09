<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccreditationApplication extends Model
{
    use HasFactory;

    protected $fillable = ['school_id', 'submitted_at', 'status', 'feedback'];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}

