<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //
        return response()->json(Employees::all());

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
        $result = new Employees;

        $result->first_name = $request->first_name;
        $result->last_name = $request->last_name;
        $result->username = $request->username;
        $result->address = $request->address;
        $result->city = $request->city;
        $result->country = $request->country;
        $result->phone = $request->phone;
        $result->image_path = $request->file('image_path')->store('images');
        $result->email = $request->email;
        $result->team_id = $request->team_id;
        $result->department_id = $request->department_id;
        $result->role_id = $request->role_id;
        $result->manager_id = $request->manager_id;

        $result->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $result = Employees::find($id);
        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $employee = Employees::find($id);

        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->username = $request->username;
        $employee->address = $request->address;
        $employee->city = $request->city;
        $employee->country = $request->country;
        $employee->phone = $request->phone;
        $employee->image_path = $request->file('image_path')->store('images');
        $employee->email = $request->email;
        $employee->team_id = $request->team_id;
        $employee->department_id = $request->department_id;
        $employee->role_id = $request->role_id;
        $employee->manager_id = $request->manager_id;

        $employee->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $team = Teams::destroy($id);
    }
}
