<?php

namespace App\Http\Controllers;
use App\Models\Toe;
use App\Models\Patient;
use Illuminate\Http\Request;

class ToeController extends Controller
{
    public function index()
    {
        $toe_investigations = Toe::paginate(4);
        return view('toe_investigations.index', compact('toe_investigations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        return view('toe_investigations.create')->with('patient', $patient);
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
            'Date' =>'required|before:tomorrow',
            'Doneby' => 'required',
            'Findings' => 'required',
        ]);
        $input = $request->all();
        Toe::create($input);
        return redirect()->route('toe_investigations.index')->with('success', 'Patient Toe  Investigations is created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toe  $toE
     * @return \Illuminate\Http\Response
     */
    public function show(Toe $toeInvestigation)
    {
        return view('toe_investigations.show', compact('toeInvestigation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toe  $toE
     * @return \Illuminate\Http\Response
     */
    public function edit(Toe $toeInvestigation)
    {
        $patient = Patient::all();
        return view('toe_investigations.edit', compact('toeInvestigation'))->with('patient', $patient);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toe  $toE
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toe $toeInvestigation)
    {
        $request->validate([
            'patient_id' => 'required',
            'Date' => 'required|date_format:Y-m-d|before:tomorrow',
            'Doneby' => 'required',
            'Findings' => 'required',
        ]);
        $input = $request->all();
        $toeInvestigation->update($input);
        return redirect()->route('toe_investigations.index')->with('success', 'Patient Toe Investigation is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toe  $toE
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toe $toeInvestigation)
    {
        $toeInvestigation->delete();
        return redirect()->route('toe_investigations.index')->with('success', 'Patient Toe Investigation is deleted successfully!');
    }
}

