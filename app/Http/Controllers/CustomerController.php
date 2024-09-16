<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        $customers = Customer::all();

        return view('pages.customer.index', ['customers' => $customers]);
    }

    public function create(): View
    {
        return view('pages.customer.create');
    }

    public function edit(string $id): View
    {
        $customer = Customer::find($id);

        return view('pages.customer.edit', ['customer' => $customer]);
    }

    public function getById(string $id): JsonResponse
    {
        $customer = Customer::find($id);

        return response()->json($customer);
    }

    public function store(Request $request): RedirectResponse
    {
        $customer = new Customer;

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        $customer->save();

        return redirect('/customer');
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $customer = Customer::find($id);

        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        $customer->save();

        return redirect('/customer');
    }

    public function destroy(string $id): JsonResponse
    {
        Customer::where('id', $id)->delete();


        return response()->json();
    }
}
