<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class SupplierController extends Controller
{
    public function index(): View
    {
        $suppliers = Supplier::all();

        return view('pages.supplier.index', ['suppliers' => $suppliers]);
    }

    public function create(): View
    {
        return view('pages.supplier.create');
    }

    public function edit(string $id): View
    {
        $supplier = Supplier::find($id);

        return view('pages.supplier.edit', ['supplier' => $supplier]);
    }

    public function getById(string $id): JsonResponse
    {
        $supplier = Supplier::find($id);

        return response()->json($supplier);
    }

    public function store(Request $request): RedirectResponse
    {
        $supplier = new Supplier;

        $supplier->name = $request->name;
        $supplier->contact_info = $request->contact_info;
        $supplier->address = $request->address;

        $supplier->save();

        return redirect('/supplier');
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $supplier = Supplier::find($id);

        $supplier->name = $request->name;
        $supplier->contact_info = $request->contact_info;
        $supplier->address = $request->address;

        $supplier->save();

        return redirect('/supplier');
    }

    public function destroy(string $id): JsonResponse
    {
        Supplier::where('id', $id)->delete();


        return response()->json();
    }
}
