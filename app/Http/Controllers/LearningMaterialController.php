<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLMRequest;
use App\LearningMaterial;
use Illuminate\Http\Request;

class LearningMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $learning_materials = LearningMaterial::all();

return $learning_materials;
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
    public function store(CreateLMRequest $request)
    {
        // $file = $request->file->store('learning_materials');

        $learning_materials = LearningMaterial::create([
            'name' => $request->name,
            'description' => $request->description,
            // 'file' => $file,
            'subjectId' => $request->subjectId,
            'typeOfLearningMaterialId' => $request->typeOfLearningMaterialId,
            'chapterId' => $request->chapterId,
            'InstructorId' => $request->InstructorId,

            // 'InstructorId' => auth()->user()->id,
        ]);

        return response()->json($learning_materials);

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\LearningMaterial  $learningMaterial
     * @return \Illuminate\Http\Response
     */
    public function show(LearningMaterial $learningMaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LearningMaterial  $learningMaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(LearningMaterial $learningMaterial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LearningMaterial  $learningMaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LearningMaterial $learningMaterial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LearningMaterial  $learningMaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy(LearningMaterial $learningMaterials)
    {
        $learningMaterials->delete();

        return response()->json(null);
    }
}
