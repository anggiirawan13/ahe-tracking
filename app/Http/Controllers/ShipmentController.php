<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class ShipmentController extends Controller
{
    public function index(): View
    {
        $shipments = Shipment::all();

        return view('pages.shipment.index', ['shipments' => $shipments]);
    }

    public function getById(string $id): JsonResponse
    {
        $shipment = Shipment::find($id);

        return response()->json($shipment);
    }

    public function create(): View
    {
        return view('pages.shipment.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'tracking_number' => 'required|unique:shipments|max:255',
            'company_name' => 'required|max:255',
            'whatsapp' => 'required|max:15',
            'status' => 'required|in:Pending,Shipped,Delivered',
            'origin_city' => 'required|max:255',
            'origin_district' => 'required|max:255',
            'origin_village' => 'required|max:255',
            'origin_rt' => 'required|max:10',
            'origin_rw' => 'required|max:10',
            'origin_postal_code' => 'required|max:10',
            'destination_city' => 'required|max:255',
            'destination_district' => 'required|max:255',
            'destination_village' => 'required|max:255',
            'destination_rt' => 'required|max:10',
            'destination_rw' => 'required|max:10',
            'destination_postal_code' => 'required|max:10',
            'ship_date' => 'required|date',
            'delivery_date' => 'nullable|date'
        ]);

        $validated['created_by'] = 'System';
        $validated['updated_by'] = 'System';

        Shipment::create($validated);

        return redirect()->route('shipment.index')->with('success', 'Shipment created successfully!');
    }

    public function edit(string $id): View
    {
        $shipment = Shipment::find($id);

        return view('pages.shipment.edit', ['shipment' => $shipment]);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $validated = $request->validate([
            'tracking_number' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'whatsapp' => 'required|min:10|max:15',
            'status' => 'required|string|max:255',
            'origin_city' => 'required|string|max:255',
            'origin_district' => 'required|string|max:255',
            'origin_village' => 'required|string|max:255',
            'origin_rt' => 'required|string|max:5',
            'origin_rw' => 'required|string|max:5',
            'origin_postal_code' => 'required|string|max:10',
            'destination_city' => 'required|string|max:255',
            'destination_district' => 'required|string|max:255',
            'destination_village' => 'required|string|max:255',
            'destination_rt' => 'required|string|max:5',
            'destination_rw' => 'required|string|max:5',
            'destination_postal_code' => 'required|string|max:10',
            'ship_date' => 'required|date',
            'delivery_date' => 'nullable|date'
        ]);

        $validated['created_by'] = 'System';
        $validated['updated_by'] = 'System';

        Shipment::find($id)->update($validated);

        return redirect()->route('shipment.index')->with('success', 'Shipment updated successfully!');
    }

    public function destroy(string $id): JsonResponse
    {
        Shipment::where('id', $id)->delete();


        return response()->json();
    }
}
