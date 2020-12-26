<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->paginate(20);
        return view('dashboard.product.show_product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
            'price' => 'required',
            'image' => 'required|image',
            'description' => 'required',
            'category_id' => 'required'
        ]);
        if($request->hasFile('image')){
            $image = $request->image;
            $image->move('uploades',$image->getClientOriginalName());
        }
        Product::create([
           'name' => $request->name,
           'price' => $request->price,
           'image' => $request->image->getClientOriginalName(),
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);


        return redirect()->route('products.index')->with('msg','products Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        return view('dashboard.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $request->validate([
            'name' => 'required',
            'price' => 'required',
//            'image' => 'required|image',
            'description' => 'required',
            'category_id' => 'required'
        ]);
        if ($request->hasFile('image'))
        {
            $image = $request->image;
            $image->move('uploades',$image->getClientOriginalName());
            $product->image = $request->image->getClientOriginalName();
        }

        $product->update([
           'name' => $request->name,
           'price' => $request->price,
           'image' => $product->image,
           'description' => $request->description,
           'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')->with('msg','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('products.index')->with('msg','Product Deleted Successfully');
    }
}
