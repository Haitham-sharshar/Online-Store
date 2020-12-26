<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
       $categories = Category::paginate(10);
       $products = Product::with('category')->orderByDesc('id')->paginate(6);
       return view('site.index',compact('categories','products'));

       return view('layouts.master',compact('categories'));
   }

}
