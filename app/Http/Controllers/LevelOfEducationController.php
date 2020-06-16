<?php

namespace App\Http\Controllers;

use App\LevelOfEducation;
use Illuminate\Http\Request;
use App\Http\Requests\CreateLevelOfEducationRequest;

class LevelOfEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$level_of_education =LevelOfEducation::all();
return $level_of_education;

   //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLevelOfEducationRequest $request)
    {
       $level_of_education = LevelOfEducation::create([
          'name' => $request->name,
            'description' => $request->description,
       ]);
        return response()->json($level_of_education);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LevelOfEducation  $levelOfEducation
     * @return \Illuminate\Http\Response
     */
    public function show(LevelOfEducation $levelOfEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LevelOfEducation  $levelOfEducation
     * @return \Illuminate\Http\Response
     */
    public function edit(LevelOfEducation $levelOfEducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LevelOfEducation  $levelOfEducation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LevelOfEducation $levelOfEducation)
    {
        //
        $levelOfEducation->update($request->all());
        return response(null, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LevelOfEducation  $levelOfEducation
     * @return \Illuminate\Http\Response
     */

    public function destroy(LevelOfEducation $levelOfEducation)
    {
        // $level_of_education = LevelOfEducation::all()->where('id',$id);

        $levelOfEducation->delete();

        return response()->json(null);
    }
}
