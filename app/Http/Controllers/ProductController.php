<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

/**
 * Post
 *
 * @mixin Builder
 */
class ProductController extends Controller
{

    /* public static array $products = [
        ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "image" => "game.png", "price"=>"1000"],
        ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "image" => "safe.png", "price"=>"999"],
        ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "image" => "submarine.png", "price"=>"30"],
        ["id"=>"4", "name"=>"laptop", "description"=>"Best Laptop for programming", "image" => "laptop.png", "price"=>"1000"]
    ]; */

    public function index(){
        $viewData = [
            'title' => "Products - Online Store",
            'subtitle' => "List of products",
            'products' => Product::all()
        ];


        return view('product.index', $viewData);
    }

    public function show($id){

        $product = Product::findOrFail($id);

        $viewData = [
            'title' => $product->name . " - Online Store",
            'subtitle' => $product->description . " product information",
            'product' => $product
        ];


        return view('product.show')->with($viewData);

    }
}
