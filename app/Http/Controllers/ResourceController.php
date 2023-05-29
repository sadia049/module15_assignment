<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return product::get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "post"=>"required",
            

        ]);

        $post=$request->input('post');
        $product = new product();
        $product->name=$post;
        $product->save();
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
        return product::where('id',$id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "post"=>"required",
            

        ]);

        $post=$request->input('post');
        $product = new product();
        $product->name=$post;
        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product= product::where('id',$id);
        $product->delete();
    }
}
