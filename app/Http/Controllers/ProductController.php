<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class ProductController extends Controller
{

    public function index(): View
    {
        $products = Product::with(['supplier', 'category'])->get();

        return view('pages.product.index', ['products' => $products]);
    }

    public function create(): View
    {
        $suppliers = Supplier::all();

        $categories = Category::all();

        return view('pages.product.create', ['suppliers' => $suppliers, 'categories' => $categories]);
    }

    public function edit(string $id): View
    {
        $product = Product::find($id);

        $suppliers = Supplier::all();

        $categories = Category::all();

        return view('pages.product.edit', ['product' => $product, 'suppliers' => $suppliers, 'categories' => $categories]);
    }

    public function getById(string $id): JsonResponse
    {
        $product = Product::find($id);

        return response()->json($product);
    }

    public function store(Request $request): RedirectResponse
    {
        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->supplier_id = $request->supplier;
        $product->category_id = $request->category;

        $product->save();

        return redirect('/product');
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $product = Product::find($id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->supplier_id = $request->supplier;
        $product->category_id = $request->category;

        $product->save();

        return redirect('/product');
    }

    public function destroy(string $id): JsonResponse
    {
        Product::where('id', $id)->delete();


        return response()->json();
    }
}
