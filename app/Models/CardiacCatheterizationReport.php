<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardiacCatheterizationReport extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'Cath_No', 'Aortic_Pressure', 'Catheter_use', 'Left_main_coronary_artery', 'Lad_Branches', 'Circumflex_and_Branches','Rca_and_Branches','Conclution','Recommendation','Consultant_cardiologist','Date'];
}
