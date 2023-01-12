<?php

namespace App\Http\Controllers;
use App\Models\TwodEcho;
use App\Models\Patient;
use Illuminate\Http\Request;

class TwodEchoController extends Controller
{
    public function index()
    {
        $twod_echos = TwodEcho::paginate(4);
        return view('twod_echos.index', compact('twod_echos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        return view('twod_echos.create')->with('patient', $patient);
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
            'Date' => 'required|date_format:Y-m-d|before:tomorrow',
            'Doneby' => 'required',
            'LVH_PRESENT_NO' => 'required',
            'LVEDO' => 'required',
            'IVS' => 'required',
            'LVESD' => 'required',
            'PW' => 'required',
            'LVEF' => 'required',
            'LA' => 'required',
            'TMVA' => 'required',
            'AO' => 'required',
            'DMVA' => 'required',
            'MV' => 'required',
            'MR_GRADE' => 'required',
            'AV' => 'required',
            'PV' => 'required',
            'TV' => 'required',
            'PA' => 'required',
            'LV_RWMD' => 'required',
            'LA_LV_Clot' => 'required',
            'Pericardial_effusion' => 'required',
            'Others' => 'required',
            'Conclution' => 'required',
            'Recommendation' => 'required',
            

        ],
        [
            
            'Date.before' => ' date must be not  in future ',
           
        ]);
        $input = $request->all();
        TwodEcho::create($input);
        return redirect()->route('twod_echos.index')->with('success', 'Patient 2d echo investication is created successfully!');
    }

    
    public function show(TwodEcho $twodEcho)
    {
        return view('twod_echos.show', compact('twodEcho'));
    }

    
    public function edit(TwodEcho  $twodEcho)
    {
        $patient = Patient::all();
        return view('twod_echos.edit', compact('twodEcho'))->with('patient', $patient);
    }

    
    public function update(Request $request, TwodEcho $twodEcho)
    {
        $request->validate([
            'patient_id' => 'required',
            'Date' =>'required|date_format:Y-m-d|before:tomorrow',
            'Doneby' => 'required',
            'LVH_PRESENT_NO' => 'required',
            'LVEDO' => 'required',
            'IVS' => 'required',
            'LVESD' => 'required',
            'PW' => 'required',
            'LVEF' => 'required',
            'LA' => 'required',
            'TMVA' => 'required',
            'AO' => 'required',
            'DMVA' => 'required',
            'MV' => 'required',
            'MR_GRADE' => 'required',
            'AV' => 'required',
            'PV' => 'required',
            'TV' => 'required',
            'PA' => 'required',
            'LV_RWMD' => 'required',
            'LA_LV_Clot' => 'required',
            'Pericardial_effusion' => 'required',
            'Others' => 'required',
            'Conclution' => 'required',
            'Recommendation' => 'required',
        ],
        [
            
            'Date.before' => ' date must be  not in future ',
           
        ]);
        $input = $request->all();
        $twodEcho->update($input);
        return redirect()->route('twod_echos.index')->with('success', 'Patient 2d echo investication is updated successfully!');
    }

   
    public function destroy(TwodEcho  $twodEcho)
    {
        $twodEcho->delete();
        return redirect()->route('twod_echos.index')->with('success', 'Patient 2d echo is deleted successfully!');
    }
}
