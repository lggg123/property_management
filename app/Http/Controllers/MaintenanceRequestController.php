<?php

namespace App\Http\Controllers;

use App\Models\MaintenanceRequest;
use Illuminate\Http\Request;

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
        $maintenance = MaintenanceRequest::create($request->all());
        return response()->json($maintenance);
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
