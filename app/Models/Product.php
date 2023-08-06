<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    use HasFactory;
    /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the product name
     * $this->attributes['description'] - string - contains the product description
     * $this->attributes['image'] - string - contains the product image
     * $this->attributes['price'] - int - contains the product price
     * $this->attributes['created_at'] - timestamp - contains the product creation date
     * $this->attributes['updated_at'] - timestamp - contains the product update date
     *
     * There is two ways to access model attr
     * 1- the first one
     * 2- by $product['name']
     */

    // start GETTERS
    public function ID(){
        return $this->attributes['id'];
    }

    public function name(){
        return $this->attributes['name'];
    }

    public function updatedAt(){
        return $this->attributes['updated_at'];
    }

    public function createdAt(){
        return $this->attributes['created_at'];
    }

    public function image(){
        return $this->attributes['image'];
    }


    public function price(){
        return $this->attributes['price'];
    }

    public function description(){
        return $this->attributes['description'];
    }
    // end  GETTERS

    // start SETTERS

    public function set_ID($id){
         $this->attributes['id'] = $id;
    }

    public function set_name($name){
         $this->attributes['name'] = $name;
    }


    public function set_image($image){
         $this->attributes['image'] = $image;
    }


    public function set_price($price){
         $this->attributes['price'] = $price;
    }

    public function set_description($description){
         $this->attributes['description'] = $description;
    }

    // end SETTERS

    public static function validate($request){
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric|gt:0',
            'image' => 'image',
        ]);
    }


}
