<?php

namespace App\Http\Controllers;

use App\models\Lease;
use Illuminate\Http\Request;

class LeaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $leases = Lease::all();
        return response()->json($leases);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Lease $lease)
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'property_id' => 'required|exists:properties,id',
            'tenant_id' => 'required|exists:tenants,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'monthly_rent' => 'required|numeric|min:0'
        ]);
    
        // Create a new lease with the validated data
        $lease = Lease::create($validatedData);
        return response()->json($lease, 201); // Return 201 status code for resource creation

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Lease $lease)
    {
        //
        return response()->json($lease);
        
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
    public function update(Request $request, string $id, Lease $lease)
    {
        //
        $lease->update();
        return response()->json($lease);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lease $lease, string $id)
    {
        //
        $lease->delete();
        return response()->json(null, 204);
    }
}
