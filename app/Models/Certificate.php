<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'certificate_url', 'issue_date', 'valid_until'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

