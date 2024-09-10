<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['training_program_id', 'module_name', 'module_duration'];

    public function trainingProgram()
    {
        return $this->belongsTo(TrainingProgram::class);
    }
}
