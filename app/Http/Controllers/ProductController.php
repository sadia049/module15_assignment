<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        
        return product::get();

        //return view('products.index');
    }
    public function create(){

        return view('products.create');
    }
    public function store(Request $request){
        
        
        $request->validate([
            "name"=>"required",
            "description"=>"required",
            "image"=>"required|mimes:,gif,jpeg"

        ]);

       

        $name=$request->input('name');
        $desc=$request->input('description');

        $image=$request->file('image');
        $filename= $image->getClientOriginalName();
        $extension=$image->extension();
        $ImageName= time()."".$filename.$extension;
        $image->move(public_path('products'),$ImageName);

        $product = new product();
        $product->name=$name;
        $product->descritption=$desc;
        $product->image=$ImageName;
        $product->save();
    }
    public function edit($id){

    return product::where('id',$id);
    }
    public function update(Request $request,$id){


        $request->validate([
            "name"=>"required",
            "description"=>"required",
            "image"=>'nullable|mimes:,gif,jpeg'

        ]);

        $product = new product();

        $product= product::where('id',$id);

       

        $name=$request->input('name');
        $desc=$request->input('description');
        $image=$request->file('image');

        if(isset($image)){
                
            
            $filename= $image->getClientOriginalName();
            $extension=$image->extension();
            $ImageName= time()."".$filename.$extension;
            $image->move(public_path('products'),$ImageName);

        }

        

      
        $product->name=$name;
        $product->descritption=$desc;
        $product->image=$ImageName;
        $product->save();

        
    }

    public function destroy($id){

        $product= product::where('id',$id);
        $product->delete();
    }
}
