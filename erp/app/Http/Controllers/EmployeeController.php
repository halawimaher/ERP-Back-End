<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $result = new Employees;

        $path = "";
        if ($request->image_path) {
        $path = Storage::disk('public')->put('', $request->image_path);
        }
   
        if ($path != "") {
            $result->image_path = $path;
        }

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
        try {
        $e = Employees::find($id);
        return response()->json(['employee'=>$e , 'team' =>$e->team , 'role'=>$e->role, 'project' => $e->project]);
        }
        catch (\Exception $e){
        return response()->json($e->getMessage());
        }
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
