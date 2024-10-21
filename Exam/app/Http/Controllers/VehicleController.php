<?php
namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    // Admin dashboard
    public function adminDashboard()
    {
        $vehicles = Vehicle::all();
        return view('admin', compact('vehicles')); // Admin dashboard view
    }

    // Driver dashboard
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('driver', compact('vehicles')); // Driver dashboard view
    }

    // Show a specific vehicle for drivers
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicle.show', compact('vehicle'));
    }

    // Show form to create a new vehicle for admins
    public function create()
    {
        return view('admin.create');
    }

    // Store a newly created vehicle
    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|string',
            'license_plate' => 'required|string',
        ]);

        Vehicle::create($request->all());
        return redirect()->route('admin')->with('success', 'Vehicle created successfully.');
    }

    // Show form to edit an existing vehicle for admins
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('admin.edit', compact('vehicle'));
    }

    // Update an existing vehicle
    public function update(Request $request, $id)
    {
        $request->validate([
            'make' => 'required|string',
            'model' => 'required|string',
            'year' => 'required|string',
            'license_plate' => 'required|string',
        ]);

        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($request->all());
        return redirect()->route('admin')->with('success', 'Vehicle updated successfully.');
    }

    // Delete an existing vehicle
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();
        return redirect()->route('admin')->with('success', 'Vehicle deleted successfully.');
    }
}
