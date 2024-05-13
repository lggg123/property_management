<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaintenanceRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MaintenanceRequest $maintenance)
    {
        //
        $maintenance = MaintenanceRequest::all();
        return response()->json($maintenance);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|in:pending,in_progress,completed',
            'property_id' => 'required|integer|exists:properties,id'
        ]);
    
        // Check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }
    
        // Create the maintenance request safely after validation
        try {
            $maintenance = MaintenanceRequest::create($validator->validated());
            return response()->json($maintenance, 201);
        } catch (\Exception $e) {
            // Handle the error appropriately
            return response()->json(['error' => 'Failed to create maintenance request', 'details' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(MaintenanceRequest $maintenance)
    {
        //
        return response()->json($maintenance);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, MaintenanceRequest $maintenance)
    {
        //
        $maintenance->update();
        return response()->json($maintenance);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, MaintenanceRequest $maintenance)
    {
        //
        $maintenance->delete();
        return response()->json(null, 204);
    }
}
