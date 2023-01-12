<?php

namespace App\Http\Controllers;
use App\Models\StressEcho;
use App\Models\Patient;
use Illuminate\Http\Request;

class StressEchoController extends Controller
{
    public function index()
    {
        $stress_echos = StressEcho::paginate(4);
        return view('stress_echos.index', compact('stress_echos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        return view('stress_echos.create')->with('patient', $patient);
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
            'Date' =>'required|date_format:Y-m-d|before:tomorrow',
            'Doneby' => 'required',
            'Findings' => 'required',
        ]);
        $input = $request->all();
        StressEcho::create($input);
        return redirect()->route('stress_echos.index')->with('success', 'Patient Stress Echo Investigations is created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StressEcho  $StressEcho
     * @return \Illuminate\Http\Response
     */
    public function show(StressEcho $stressEcho)
    {
        return view('stress_echos.show', compact('stressEcho'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StressEcho  $StressEcho
     * @return \Illuminate\Http\Response
     */
    public function edit(StressEcho $stressEcho)
    {
        $patient = Patient::all();
        return view('stress_echos.edit', compact('stressEcho'))->with('patient', $patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StressEcho  $StressEcho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StressEcho $stressEcho)
    {
        $request->validate([
            'patient_id' => 'required',
            'Date' => 'required|date_format:Y-m-d|before:tomorrow',
            'Doneby' => 'required',
            'Findings' => 'required',
        ]);
        $input = $request->all();
        $stressEcho->update($input);
        return redirect()->route('stress_echos.index')->with('success', 'Patient Stress Echo Investigation is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StressEcho  $StressEcho
     * @return \Illuminate\Http\Response
     */
    public function destroy(StressEcho $stressEcho)
    {
        $stressEcho->delete();
        return redirect()->route('stress_echos.index')->with('success', 'Patient Stress Echo Investigation is deleted successfully!');
    }
}

