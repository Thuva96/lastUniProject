<?php

namespace App\Http\Controllers;

use App\Models\Investigation;
use App\Models\Patient;
use Illuminate\Http\Request;

class InvestigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigations = Investigation::paginate(4);
        return view('investigations.index', compact('investigations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        return view('investigations.create')->with('patient', $patient);
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
            'ECG' => 'required',
            'Troponin_IT' => 'required',
           
            'CXR' => 'required',
            'UFR' => 'required',
            'FBC' => 'required',
            'FBS' => 'required',
            'S_Cr' => 'required',
            'BU' => 'required',
            'SE' => 'required',

            'lipid_profile' => 'required',
            'T_Cholestreol' => 'required',
            'LDL' => 'required',
            'HDL' => 'required',
            'TG' => 'required',
            'ESR' => 'required',
            'CRP' => 'required',
            'OTHER_Investigation' => 'required|min:2|max:255',
            'Referrals' => 'required|min:2|max:255',
            'Plan_on_discharge' => 'required|min:2|max:255',
            'Next_appointment' => 'required|date_format:Y-m-d|after:today',
            'lx_to_be_done' => 'required|min:2|max:255',
            'Medical_Officer' => 'required|min:2|max:30',
        ],
        [
            
            'Next_appointment.after' => 'Next Appointment Date must be in future ',
            

        ]);
        $input = $request->all();
        Investigation::create($input);
        return redirect()->route('investigations.index')->with('success', 'Patient investigations is created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClinicVisit  $clinicVisit
     * @return \Illuminate\Http\Response
     */
    public function show(Investigation $investigation)
    {
        return view('investigations.show', compact('investigation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClinicVisit  $clinicVisit
     * @return \Illuminate\Http\Response
     */
    public function edit(Investigation $investigation)
    {
        $patient = Patient::all();
        return view('investigations.edit', compact('investigation'))->with('patient', $patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClinicVisit  $clinicVisit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investigation $investigation)
    {
        $request->validate([
            'patient_id' => 'required',
            'ECG' => 'required',
            'Troponin_IT' => 'required',
           
            'CXR' => 'required',
            'UFR' => 'required',
            'FBC' => 'required',
            'FBS' => 'required',
            'S_Cr' => 'required',
            'BU' => 'required',
            'SE' => 'required',

            'lipid_profile' => 'required',
            'T_Cholestreol' => 'required',
            'LDL' => 'required',
            'HDL' => 'required',
            'TG' => 'required',
            'ESR' => 'required',
            'CRP' => 'required',
            'OTHER_Investigation' => 'required|min:2|max:255',
            'Referrals' => 'required|min:2|max:255',
            'Plan_on_discharge' => 'required|min:2|max:255',
            'Next_appointment' => 'required|date_format:Y-m-d|after:today',
            'lx_to_be_done' => 'required|min:2|max:255',
            'Medical_Officer' => 'required|min:2|max:30',
        ],
        [
            
            'Next_appointment.after' => 'Next Appointment Date must be in future ',
          

        ]);
        $input = $request->all();
        $investigation->update($input);
        return redirect()->route('investigations.index')->with('success', 'Patient investigation is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClinicVisit  $clinicVisit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investigation $investigation)
    {
        $investigation->delete();
        return redirect()->route('investigations.index')->with('success', 'Patient investigation is deleted successfully!');
    }
}

