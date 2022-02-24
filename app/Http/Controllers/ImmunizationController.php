<?php

namespace App\Http\Controllers;

use App\Models\Immunization;
use Illuminate\Http\Request;

class ImmunizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $immunizations = Immunization::latest()->paginate(5);
        return view('immunization.index',compact('immunizations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('immunization.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$
            $request->validate([
            'child_name' => 'required',
            'age' => 'required',
            'vaccine_type' => 'required',
            'doctor' => 'required',
            'hospital' => 'required',
            'notes' => 'required',
            'date' => 'required',
            'mother_name' => 'required',
            'next_date' => 'required',
        ]);

        Immunization::create($request->all());
        return redirect()->route('immunization.index')
                        ->with('success','Immunization created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function show(Immunization $immunization)
    {
        //
        return view('immunization.update',compact('immunization'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function edit(Immunization $immunization)
    {
        return view('immunization.edit',compact('immunization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Immunization $immunization)
    {
        $request -> validate([
            'child_name' => 'required',
            'age' => 'required',
            'vaccine_type' => 'required',
            'doctor' => 'required',
            'date' => 'required',
            'mother_name' => 'required',
            'next_date' => 'required',
        ]);
        $immunization -> update($request -> all());

        return redirect() -> route('immunization.index')
                        -> with('success','Immunization updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Immunization  $immunization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Immunization $immunization)
    {
        //
        $immunization -> delete();
        return redirect() -> route('immunization.index')
                        -> with('success','Immunization deleted successfully');
    }
}
