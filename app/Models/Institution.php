<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable = [
        'name',
        'type',
        'physical_address',
        'province',
        'district',
        'sector',
        'cell',
        'village',
        'phone',
        'email',
        'owner_name',
        'owner_phone',
        'owner_email',
        'contact_person_name',
        'contact_person_phone',
        'contact_person_email',
        'registration_date',
        'registration_number',
        'legal_status',
        'mission',
        'objectives',
    ];

    public function trainingPrograms()
    {
        return $this->hasMany(TrainingProgram::class);
    }

    public function equipment()
    {
        return $this->hasMany(Equipment::class);
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
}
