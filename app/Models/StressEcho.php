<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StressEcho extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'Date', 'Doneby','Findings'];
}
