<?php

namespace App\Http\Controllers;

use App\Models\PatientSchedModel;
use Illuminate\Http\Request;

class PatientSchedController extends Controller
{
    //

    public function index()
    {
        return response()->json(PatientSchedModel::all()->toArray());
        

    }
    public function store(Request $request)
    {
        PatientSchedModel::create($request->all());
        return response()->json('Data added successfully', 201);

    }

    public function update(Request $request,PatientSchedModel $patientschedModel)
    {
        $patientschedModel->update($request->all());
        return response()->json($patientschedModel->toArray(), 200);
    }
    public function destroy($id)
    {
        $patientschedModel = PatientSchedModel::find($id);
    
        if (!$patientschedModel) {
            return response()->json(['message' => 'Record not found'], 404);
        }
    
        $patientschedModel->delete();
    
        return response()->json(['message' => 'Data deleted successfully'], 200);
    }
    
}
