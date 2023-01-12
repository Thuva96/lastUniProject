<?php

namespace App\Http\Controllers;
use App\Models\HolterMonitoring;
use App\Models\Patient;
use Illuminate\Http\Request;

class HolterMonitoringController extends Controller
{
    //
    public function index()
    {
        $holter_monitorings = HolterMonitoring::paginate(4);
        return view('holter_monitorings.index', compact('holter_monitorings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        return view('holter_monitorings.create')->with('patient', $patient);
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
            'Conclusion' => 'required',
            'Recommendation' => 'required',
        ],
        [
            
            'Date.before' => ' date must be  not in future ',
           
        ]);
        $input = $request->all();
        HolterMonitoring::create($input);
        return redirect()->route('holter_monitorings.index')->with('success', 'Patient holter monitoring is created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HolterMonitoring  $HolterMonitoring
     * @return \Illuminate\Http\Response
     */
    public function show(HolterMonitoring $holterMonitoring)
    {
        return view('holter_monitorings.show', compact('holterMonitoring'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HolterMonitoring  $HolterMonitoring
     * @return \Illuminate\Http\Response
     */
    public function edit(HolterMonitoring $holterMonitoring)
    {
        $patient = Patient::all();
        return view('holter_monitorings.edit', compact('holterMonitoring'))->with('patient', $patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HolterMonitoring  $HolterMonitoring
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HolterMonitoring $holterMonitoring)
    {
        $request->validate([
            'patient_id' => 'required',
            'Date' => 'required|date_format:Y-m-d|before:tomorrow',
            'Conclusion' => 'required',
            'Recommendation' => 'required',
        ],
        [
            
            'Date.before' => ' date must be  not in future ',
           
        ]);
        $input = $request->all();
        $holterMonitoring->update($input);
        return redirect()->route('holter_monitorings.index')->with('success', 'Patient holter monitoring is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HolterMonitoring  $HolterMonitoring
     * @return \Illuminate\Http\Response
     */
    public function destroy(HolterMonitoring $holterMonitoring)
    {
        $holterMonitoring->delete();
        return redirect()->route('holter_monitorings.index')->with('success', 'Patient holter monitoring is deleted successfully!');
    }
}

