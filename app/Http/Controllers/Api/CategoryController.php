<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        $data = [
            'categories' => $categories,
            'message' => 'List of categories'
        ];

        return response()->json($data);
    }
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|max:255',
        ]);
        $category = Category::create($request->all());
        $data = [
            'category' => $category,
            'message' => 'Category created successfully'
        ];
        return response()->json($data);
    }

    public function show(Category $category)
    {
        $data = [
            'category' => $category,
            'message' => 'show category'
        ];
        return response()->json($data);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $data = [
            'name' => $request->name,
            'message' => 'Category updated successfully'
        ];
        $category->update($request->all());
        return response()->json($data);
    }

    public function delete(Category $category)
    {
        $category->delete();
        return response()->json(['message' => 'Category deleted successfully']);
    }
}
