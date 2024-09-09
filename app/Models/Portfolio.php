<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'academic_record', 'exam_results', 'rtb_review_status'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

