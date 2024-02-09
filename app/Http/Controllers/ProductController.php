<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::where('name', 'like', '%'.request('name').'%')->paginate(10);
        return view('pages.products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['categories'] = Category::get();

        return view('pages.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category_id' => 'required',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->is_favorite = $request->is_favorite;
        $product->status = $request->status;

        $product->save();

        if ($request->hasFile('image')) {
            $test = $request->file('image');
            $test->storeAs('public/products', $product->id . '.' . $test->getClientOriginalExtension());
            $product->image = 'storage/products/' . $product->id . '.' . $test->getClientOriginalExtension();
            $product->save();
        }

        return redirect()->route('product.index')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['categories'] = Category::get();
        $data['product'] = Product::find($id);

        return view('pages.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category_id' => 'required',
        ]);

        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->is_favorite = $request->is_favorite;
        $product->status = $request->status;

        if ($request->hasFile('image')) {
            $test = $request->file('image');
            $test->storeAs('public/products', $product->id . '.' . $test->getClientOriginalExtension());
            $product->image = 'storage/products/' . $product->id . '.' . $test->getClientOriginalExtension();
            $product->save();
        }

        return redirect()->route('product.index')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back()->with('success', 'Product Deleted Successfully');
    }
}