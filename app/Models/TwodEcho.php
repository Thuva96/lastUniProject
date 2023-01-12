<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TwodEcho extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'Date', 'Doneby', 'LVH_PRESENT_NO','LVEDO','IVS','LVESD','PW','LVEF','LA','TMVA','AO','DMVA','MV','MR_GRADE','AV','PV','TV','PA','LV_RWMD','LA_LV_Clot','Pericardial_effusion','Others','Conclution','Recommendation'];
}
