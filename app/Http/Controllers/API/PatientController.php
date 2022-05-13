<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;
use Mockery\Exception;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $patient=Patient::with(['vitals','visit_forms'])
                ->paginate();
            return response()->json([
                'success' =>true,
                'message' =>'You have successfully retrieved list of patients',
                'data'  => $patient
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
            $patient=Patient::create([
                "registration_date" =>$request->input("registrationDate"),
                "first_name"    =>$request->input("firstName"),
                "last_name" =>$request->input("lastName"),
                "dob"   =>$request->input("dateOfBirth"),
                "patient_number"   =>$request->input("patientID"),
                "gender" =>$request->input("gender"),
            ]);
            return response()->json([
                'success' =>true,
                'message' =>'You have successfully created a patient account',
                'data' =>$patient
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
