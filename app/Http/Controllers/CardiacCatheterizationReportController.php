<?php

namespace App\Http\Controllers;
use App\Models\CardiacCatheterizationReport;
use App\Models\Patient;
use Illuminate\Http\Request;

class CardiacCatheterizationReportController extends Controller
{
    //
    public function index()
    {
        $cardiaccatheterization_reports = CardiacCatheterizationReport::paginate(4);
        return view('cardiaccatheterization_reports.index', compact('cardiaccatheterization_reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        return view('cardiaccatheterization_reports.create')->with('patient', $patient);
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
            'Cath_No'=> 'required|numeric',
            'Aortic_Pressure'=> 'required',
            'Catheter_use'=> 'required|max:255',
            'Left_main_coronary_artery'=> 'required|max:255',
            'Lad_Branches'=>'required|max:255',
            'Circumflex_and_Branches'=> 'required|max:255',
            'Rca_and_Branches'=> 'required|max:255',
         
            'Conclution' => 'required',
            'Recommendation' => 'required',
            'Consultant_cardiologist'=> 'required',
            'Date' => 'required|date_format:Y-m-d|before:tomorrow',
        ],
        [
            'Date.before' => ' Date must be not  in future ',
            'Catheter_use.max' => 'Catheter use must be have less than 255 char ',
            'Left_main_coronary_artery.max' => 'Left_main_coronary_artery must be have less than 255 char ',
            'Circumflex_and_Branches.max' => 'Circumflex_and_Branches must be have less than 255 char ',
            'Rca_and_Branches.max' => 'Rca_and_Branches must be have less than 255 char ',
        ]);
        $input = $request->all();
        CardiacCatheterizationReport::create($input);
        return redirect()->route('cardiaccatheterization_reports.index')->with('success', 'Patient cardiaccatheterization_reports is created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardiacCatheterizationReport  $cardiaccatheterizationReport
     * @return \Illuminate\Http\Response
     */
    public function show(CardiacCatheterizationReport $cardiaccatheterizationReport)
    {
        return view('cardiaccatheterization_reports.show', compact('cardiaccatheterizationReport'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardiacCatheterizationReport  $cardiaccatheterizationReport
     * @return \Illuminate\Http\Response
     */
    public function edit(CardiacCatheterizationReport $cardiaccatheterizationReport)
    {
        $patient = Patient::all();
        return view('cardiaccatheterization_reports.edit', compact('cardiaccatheterizationReport'))->with('patient', $patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CardiacCatheterizationReport  $cardiaccatheterizationReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CardiacCatheterizationReport $cardiaccatheterizationReport)
    {
        $request->validate([
            'patient_id' => 'required',
            'Cath_No'=> 'required|numeric',
            'Aortic_Pressure'=> 'required',
            'Catheter_use'=> 'required|max:255',
            'Left_main_coronary_artery'=> 'required|max:255',
            'Lad_Branches'=>'required|max:255',
            'Circumflex_and_Branches'=> 'required|max:255',
            'Rca_and_Branches'=> 'required|max:255',
         
            'Conclution' => 'required',
            'Recommendation' => 'required',
            'Consultant_cardiologist'=> 'required',
            'Date' => 'required|date_format:Y-m-d|before:tomorrow',
        ],
        [
            'Date.before' => ' Date must be not  in future ',
            'Catheter_use.max' => 'Catheter use must be have less than 255 char ',
            'Left_main_coronary_artery.max' => 'Left_main_coronary_artery must be have less than 255 char ',
            'Circumflex_and_Branches.max' => 'Circumflex_and_Branches must be have less than 255 char ',
            'Rca_and_Branches.max' => 'Rca_and_Branches must be have less than 255 char ',
        ]);
        $input = $request->all();
        $cardiaccatheterizationReport->update($input);
        return redirect()->route('cardiaccatheterization_reports.index')->with('success', 'Patient cardiac catheterization reports is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardiacCatheterizationReport  $cardiaccatheterizationReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardiacCatheterizationReport $cardiaccatheterizationReport)
    {
        $cardiaccatheterizationReport->delete();
        return redirect()->route('cardiaccatheterization_reports.index')->with('success', 'Patient cardiac catheterization report is deleted successfully!');
    }
}