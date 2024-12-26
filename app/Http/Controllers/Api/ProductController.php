<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Element;
use App\Models\Option;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with([
            'category',
            'elements.options'
        ])->get();

        $data = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'category_name' => $product->category->name ?? null,
                'description' => $product->description,
                'elements' => $product->elements->map(function ($element) {
                    return [
                        'id' => $element->id,
                        'product_name' => $element->product->name,
                        'name' => $element->title,
                        'price' => $element->price,
                        'quantity' => $element->quantity,
                        'options' => $element->options->map(function ($option) {
                            return [
                                'id' => $option->id,
                                'element_title' => $option->element->title,
                                'attribute_name' => $option->attchar->att->name,
                                'characteristic_name' => $option->attchar->char->name
                            ];
                        }),
                    ];
                }),
            ];
        });

        return response()->json([
            'products' => $data,
            'message' => 'List of products with category names, elements, and their options',
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|max:255',
            'title' => 'required|max:255',
            'price' => 'required|integer',
            'quantity' => 'required',
            'data' => 'nullable|array',
            'data.*' => 'integer',
        ]);

        $product = Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
        ]);

        $element = Element::create([
            'product_id' => $product->id,
            'title' => $request->title,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        if ($request->filled('data')) {
            foreach ($request->data as $value) {
                Option::create([
                    'element_id' => $element->id,
                    'att_char_id' => $value,
                ]);
            }
        }

        $options = Option::orderBy('id', 'desc')->limit(10)->get();

        return response()->json([
            'product' => $product,
            'element' => $element,
            'options' => $options,
            'message' => 'Product created successfully',
        ]);
    }
}
