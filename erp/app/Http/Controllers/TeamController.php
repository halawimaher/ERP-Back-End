<?php

namespace App\Http\Controllers;

use App\Teams;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //
        return response()->json(Teams::all());
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
        $team = new Teams;

        $team->name = $request->name;

        $team->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teams $team
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Teams::where('id', $id)->with('projects', 'employees')->first();
        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teams  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teams  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = Teams::find($id);

        $team->name = $request->name;

        $team->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teams  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Teams::destroy($id);
    }
}
