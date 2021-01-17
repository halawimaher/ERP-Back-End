<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;
use Psy\Util\Json;

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
        try {
//            $t = Employees::with('Employees_Teams','')->get();
            $t = Employees::all();
            $a = [];
            foreach ($t as $e){
                $a [] = ['employee'=>$e , 'team' =>$e->team , 'role'=>$e->role, 'project' => $e->project];
            }
            return response()->json($a, 200);
            }
            catch (\Exception $e){
            return response()->json($e->getMessage());
            }
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
        //check if allowed image fille type
        $request->validate([
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //image upload
        if ($request->hasFile('image_path')){

            //create image name
            $imageName = 'b'. time().'.'.$request->image_path->extension();
            $request->file('image_path')->storeAs('public/**images**', $imageName);
            $request->image_path = $imageName;
        }


        $result = new Employees;

        $result->first_name = $request->first_name;
        $result->last_name = $request->last_name;
        $result->username = $request->username;
        $result->address = $request->address;
        $result->city = $request->city;
        $result->country = $request->country;
        $result->phone = $request->phone;
        $result->email = $request->email;

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
        $result = Employees::where('id' , $id)->with('teams', 'team_roles')->first();
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
        $employee->image_path = $request->file('image_path')->store('images');
        $employee->phone = $request->phone;
        $employee->email = $request->email;

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
        response()->json(Employees::destroy($id));
    }
}
