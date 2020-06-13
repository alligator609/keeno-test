<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class HomeController extends Controller
{
    
    public function index()
    {
       // \DB::enableQueryLog();
       $fProducts = Product::where('is_featured',true)->orderBy('id','asc')->get();
       $products = Product::orderBy('id','asc')->get();
        return view('welcome', compact('products','fProducts'));//->render();


//  dd(\DB::getQueryLog());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
