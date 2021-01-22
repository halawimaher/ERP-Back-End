<?php

namespace App\Http\Controllers;

use App\Employees;
use App\Employees_Kpis;
use DateTime;
use Illuminate\Http\Request;

class EmployeeKpis extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        //
        $kpi = Employees_Kpis::all();
        $a =[];
       foreach ($kpi as $e){
            $a [] = ['employees'=>$e ,"Kpi" => $e->employee];
        }
        return response()->json($kpi);
    }

    public function evaluate()
    {
        //
        $kpi = Employees_Kpis::all()->where('is_current', -1);
        return response()->json($kpi);
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
        $result = new Kpis;

        $result->fill($request->all());
        $result->created = new DateTime();

        return response()->json($result->save());
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
    }
}
