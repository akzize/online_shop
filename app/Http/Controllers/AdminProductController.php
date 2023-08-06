<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData["title"] = "Admin Page - Products - Online Store";
        $viewData["products"] = Product::all();
        return view('admin.product.index')->with($viewData);
    }
    
    public function store(Request $request){

        /*
         * here we removed the validation and put it in a function in Product model
         * Avoiding the repeatation and performing the reusability
         * */

        Product::validate($request);

        $product = new Product();
        $product->set_name($request->input('name'));
        $product->set_description($request->input('description'));
        $product->set_price($request->input('price'));
        $product->set_image('');
        $product->save();


        if ($request->hasFile('image')){

            $imageName = $product->ID().'.'.$request->file('image')->extension();
            Storage::disk('public')->put($imageName,
                file_get_contents($request->file('image')->getRealPath()));

        $product->set_image($imageName);
        $product->save();
        }

         /* here you can use this one instead of the first
            but here to use it you have to add the $fillable attr in the model
          $creationData = $request->only(["name","description","price"]);
           $creationData["image"] = "game.png";
           Product::create($creationData);
         */


        return back();
    }

    public function delete($id){
        Product::destroy($id);
        return back();
    }

    public function edit($id){
        $data = [
            'title' => "Admin Page - Edit Product - Online Store",
            'product' => Product::findOrFail($id),
        ];

        return view('admin.product.edit')->with($data);
    }

    public function update(Request $request, $id){
        Product::validate($request);

        $product = Product::findOrFail($id);
        $product->set_name($request->input('name'));
        $product->set_description($request->input('description'));
        $product->set_price($request->input('price'));

        if ($request->hasFile('image')){
            $nameImage = $product->ID() . '.' . $request->file('image')->extension();
            Storage::disk('public')->put($nameImage, file_get_contents($request->file('image')->getRealPath()));
            $product->set_image($nameImage);
        }

        $product->save();
        return redirect()->route('admin.product.index');

    }
}
