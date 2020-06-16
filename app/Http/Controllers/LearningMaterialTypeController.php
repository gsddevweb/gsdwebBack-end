<?php

namespace App\Http\Controllers;

use App\LearningMaterialType;
use Illuminate\Http\Request;
use App\Http\Requests\CreateLearningMaterialTypeRequest;

class LearningMaterialTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 $learning_material_types =LearningMaterialType::all();
return $learning_material_types;

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
    public function store(Request $request)
    {
      //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LearningMaterialType  $learningMaterialType
     * @return \Illuminate\Http\Response
     */
    public function show(LearningMaterialType $learningMaterialType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LearningMaterialType  $learningMaterialType
     * @return \Illuminate\Http\Response
     */
    public function edit(LearningMaterialType $learningMaterialType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LearningMaterialType  $learningMaterialType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LearningMaterialType $learningMaterialType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LearningMaterialType  $learningMaterialType
     * @return \Illuminate\Http\Response
     */
    public function destroy(LearningMaterialType $learningMaterialType)
    {
         $learningMaterialType->delete();

        return response()->json(null);
    }
}
