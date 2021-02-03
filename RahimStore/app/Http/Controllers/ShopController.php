<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ShopController extends Controller
{
   public function index(){
       $product=Product::all();
       return view('front-end.home',['product'=>$product]);
   }
   public function admin(){
       return view('admin.dashboard');
   }

   public function productAdd(){
       return view('admin.add-product');
   }

   public function productManege(){
       $product=Product::all();

       return view('admin.manege-product',['product'=>$product]);
   }
   public function productView(){
       $product=Product::all();
       return view('admin.view-product',['product'=>$product]);
   }
   public function productInsert(Request $request)
   {


       $product = new Product();

       if ($request->hasFile('image')) {
           $image = $request->file('image');
           $directory = "images/";
           $name = "IMG_" . date("Ymd_his") . "." . $image->getClientOriginalExtension();
           $imageUrl = $directory . $name;

           $image->move($directory, $name);

           $product->name = $request->name;
           $product->productid = $request->productid;
           $product->price = $request->price;
           $product->quantity = $request->quantity;
           $product->image = $imageUrl;
           $product->uploadby = $request->uploadby;

           $product->save();

           return redirect('/add-product')->with('message', 'Product Save Successfully');

       }
   }
       public function productEdit($id){
            $product=Product::find($id);
           return view('admin.edit-product', ['product' => $product]);

       }
       public function productUpdate (Request $request, $id){

           $products =Product::find($id);


           if ($request->hasFile('image')) {
               $image = $request->file('image');
               $directory = "images/";
               $name = "IMG_" . date("Ymd_his") . "." . $image->getClientOriginalExtension();
               $imageUrl = $directory . $name;

               $image->move($directory, $name);

               $products->name = $request->name;
               $products->productid = $request->productid;
               $products->price = $request->price;
               $products->quantity = $request->quantity;
               $products->image = $imageUrl;
               $products->uploadby = $request->uploadby;

               $products->save();

               return redirect('/manege-product')->with('message', 'Product Update Successfully');

           }
       }


public function productDelete($id){
      $product=Product::find($id);
    $product->delete();
    $photo = $product->image;
    unlink($photo);
    return redirect('/manege-product')->with('message', 'Product Delete Successfully');
}

}
