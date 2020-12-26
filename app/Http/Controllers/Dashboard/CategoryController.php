<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view ('dashboard.category.show_category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate form
        $request->validate([
           'name' => 'required',
            'image' => 'required|image'
        ]);

        // Store data
        //upload the image
        if($request->hasFile('image')){
            $image = $request->image;
            $image->move('uploades',$image->getClientOriginalName());
        }

        
       Category::create([
           'name' => $request->name,
           'image' => $request->image->getClientOriginalName()
       ]);
        // session
        return redirect()->route('categories.index')->with('msg','Category Created Successfully');
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
        $category = Category::find($id);
        return view ('dashboard.category.edit',compact('category'));
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
        $category = Category::find($id);

        $request->validate([
            'name' => 'required',
            'image' => 'required|image'
        ]);
        if ($request->hasFile('image'))
        {
            $image = $request->image;
            $image->move('uploades',$image->getClientOriginalName());
            $category->image = $request->image->getClientOriginalName();
        }
        $category->update([
           'name' => $request->name,
            'image' =>$category->image
        ]);

        return redirect()->route('categories.index')->with('msg','Category Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Category::destroy($id);
        return redirect()->back()->with('msg','Category Deleted Successfully');
    }
}
