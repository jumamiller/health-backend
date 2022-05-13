<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\VisitForm;
use Exception;
use Illuminate\Http\Request;

class VisitFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            $visits=VisitForm::paginate();
            return response()->json([
                'success' =>true,
                'message' =>'You have successfully retrieved list of visits',
                'data'  => $visits
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
            VisitForm::create([
                "patient_id" =>$request->input("patient_id"),
                "diet_general_health"    =>$request->input("dietGeneralHealth"),
                "drugs_general_health"    =>$request->input("drugsGeneralHealth"),
                "drugs_visit_date"    =>$request->input("drugsVisitDate"),
                "diet_visit_date"    =>$request->input("dietVisitDate"),
                "is_on_diet_to_lose_weight" =>$request->input("is_on_diet_to_lose_weight"),
                "is_on_drugs"   =>$request->input("is_on_drugs"),
                "drugs_comments" =>$request->input("drugsComments"),
                "diet_comments" =>$request->input("dietComments"),
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
