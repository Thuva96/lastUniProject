<?php

namespace App\Http\Controllers;
use App\Models\InwardAdmissionSummary;
use App\Models\Patient;
use Illuminate\Http\Request;

class InwardAdmissionSummaryController extends Controller
{
   
    public function index()
    {
       $inward_admission_summaries = InwardAdmissionSummary::paginate(4);
       return view('inward_admission_summaries.index', compact('inward_admission_summaries'));
    }
    public function create()
    {
        $patient = Patient::all();
        return view('inward_admission_summaries.create')->with('patient', $patient);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'DOA' => 'required|date_format:Y-m-d|before:today',
            'DOD' => 'required|date_format:Y-m-d|after:DOA',
            'BHT_NO' => 'required',
            
            'Reason_For_Admission' => 'required|min:2|max:255',
            'Acute_Problem' => 'required|min:2|max:255',
            'Pulse' => 'required',
            'BP' => 'required',
            'Special_Treatment'=> 'required',
         
            
        ],
        [
            'DOA.before' => 'DOA Date must be in Past ',
            'DOD.before' => 'DOD Date must be in Past ',
            'DOD.after' => 'DOD Date must be a date after DOA ',
           
        ]);
        $input = $request->all();
        InwardAdmissionSummary::create($input);
        return redirect()->route('inward_admission_summaries.index')->with('success', 'Patient inward admission summary is created successfully!');
    }

    
    public function show(InwardAdmissionSummary $InwardAdmissionSummary)
    {
        return view('inward_admission_summaries.show', compact('InwardAdmissionSummary'));
    }

    
    public function edit(InwardAdmissionSummary $InwardAdmissionSummary)
    {
        $patient = Patient::all();
        return view('inward_admission_summaries.edit', compact('InwardAdmissionSummary'))->with('patient', $patient);
    }

   
    public function update(Request $request, InwardAdmissionSummary $InwardAdmissionSummary)
    {
        $request->validate([
            'patient_id' => 'required',
            'DOA' => 'required|date_format:Y-m-d|before:today',
            'DOD' => 'required|date_format:Y-m-d|after:DOA|before:today',
            'BHT_NO' => 'required',
            
            'Reason_For_Admission' => 'required|min:2|max:255',
            'Acute_Problem' => 'required|min:2|max:255',
            'Pulse' => 'required',
            'BP' => 'required',
            'Special_Treatment'=> 'required',
           

        ],
        [
            'DOA.before' => 'DOA Date must be in Past ',
            'DOD.before' => 'DOD Date must be in Past ',
            'DOD.after' => 'DOD Date must be a date after DOA ',
          
        ]);
        $input = $request->all();
        $InwardAdmissionSummary->update($input);
        return redirect()->route('inward_admission_summaries.index')->with('success', 'Patient inward summary is updated successfully!');
    }

    
    public function destroy(InwardAdmissionSummary $InwardAdmissionSummary)
    {
        $InwardAdmissionSummary->delete();
        return redirect()->route('inward_admission_summaries.index')->with('success', 'Patient inward summary is deleted successfully!');
    }
}

    

