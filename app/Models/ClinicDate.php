<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicDate extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'Date', 'time', 'by_whom'];
}
