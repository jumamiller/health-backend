<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vital;
use Exception;
use Illuminate\Http\Request;

class VitalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $vitals=Vital::paginate();
            return response()->json([
                'success' =>true,
                'message' =>'You have successfully retrieved list of visits',
                'data'  => $vitals
            ]);
        }catch (Exception $e){
            return response()->json([
                'success' =>false,
                'message' =>$e->getMessage()
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try{
            Vital::create([
                "patient_id" =>$request->input("patientID"),
                "visit_date" =>$request->input("visitDate"),
                "height" =>$request->input("height"),
                "weight"   =>$request->input("weight"),
                "bmi" =>$request->input("BMI"),
            ]);
            return response()->json([
                'success' =>true,
                'message' =>'You have successfully created patient visit form'
            ]);
        }catch (Exception $e){
            return response()->json([
                'success' =>false,
                'message' =>$e->getMessage()
            ]);
        }
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
