<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();

        return view('pages.category.index', ['categories' => $categories]);
    }

    public function create(): View
    {
        return view('pages.category.create');
    }

    public function edit(string $id): View
    {
        $category = Category::find($id);

        return view('pages.category.edit', ['category' => $category]);
    }

    public function getById(string $id): JsonResponse
    {
        $category = Category::find($id);

        return response()->json($category);
    }

    public function store(Request $request): RedirectResponse
    {
        $category = new Category;

        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return redirect('/category');
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $category = Category::find($id);

        $category->name = $request->name;
        $category->description = $request->description;

        $category->save();

        return redirect('/category');
    }

    public function destroy(string $id): JsonResponse
    {
        Category::where('id', $id)->delete();


        return response()->json();
    }
}
