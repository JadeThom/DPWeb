<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['photo',
        'name',
        'date_birth',
        'sex',
        'phone',
        'civil_status',
        'mother',
        'father',
        'nationality',
        'naturalness',
        'address_id',
        'breed',
        'deficient',
        'blood'];

    public function address(){
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }
}
