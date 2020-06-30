<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInstrDRequest;
use App\InstructorDetail;
use Illuminate\Http\Request;

class InstructorDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function store(CreateInstrDRequest $request)
    {
        $instructorDetails = InstructorDetail::create([
            'userId' => $request->userId,
            'name' => $request->name,
            'description' => $request->description,

            ]);

        return response()->json($instructorDetails);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\InstructorDetail  $instructorDetail
     * @return \Illuminate\Http\Response
     */
    public function show(InstructorDetail $instructorDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\InstructorDetail  $instructorDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(InstructorDetail $instructorDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\InstructorDetail  $instructorDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InstructorDetail $instructorDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\InstructorDetail  $instructorDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(InstructorDetail $instructorDetails)
    {
        $instructorDetails->delete();

        return response()->json(null);
    }
}
