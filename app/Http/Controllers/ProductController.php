<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use DB;
use App\Models\Category;

class ProductController extends Controller
{
    public function addRecommended(){

        $r=request();
        $r->file('image')!='';
        $image=$r->file('image');
        $image->move('image',$image->getClientOriginalName());
        $imageName=$image->getClientOriginalName();

        $addBook=product::create([
            'name'=>$r->name,
            'price'=>$r->price,
            'image'=>$imageName,
        ]);
        
        return view('adminWelcome');
        
    }

    public function adminWelcome(){
        $viewAll=Product::all();
        return view('adminWelcome')->with('products', $viewAll);
    }

    public function news(){
        return view('news');
    }

    public function warnke() {
        $viewAll = Product::all()->where('categoryID',value("1"));
        return view('warnke')->with('products',$viewAll);
    }

    public function Swisse() {
        $viewAll = Product::all()->where('categoryID',value("2"));
        return view('Swisse')->with('products',$viewAll);
    }

    public function healthycare() {
        $viewAll = Product::all()->where('categoryID',value("3"));
        return view('healthycare')->with('products',$viewAll);
    }

    public function honey() {
        $viewAll = Product::all()->where('categoryID',value("4"));
        return view('honey')->with('products',$viewAll);
    }

    public function oatmeal() {
        $viewAll = Product::all()->where('categoryID',value("5"));
        return view('oatmeal')->with('products',$viewAll);
    }

    public function vitaminc() {
        $viewAll = Product::all()->where('categoryID',value("6"));
        return view('vitaminc')->with('products',$viewAll);
    }

    public function calcium() {
        $viewAll = Product::all()->where('categoryID',value("7"));
        return view('calcium')->with('products',$viewAll);
    }

    public function fishoil() {
        $viewAll = Product::all()->where('categoryID',value("8"));
        return view('fishoil')->with('products',$viewAll);
    }

    public function adminAdd(){
        $r=request();
        if($r->file('images')!=''){
            $image=$r->file('images'); //get uploaded file from HTML
            $image->move('images',$image->getClientOriginalName()); //image copy to folder under public/images
            $imageName=$image->getClientOriginalName(); //get uploaded image file name
        }
        else{
            $imageName="";//default image
        }
        $addProduct=Product::create([
            'name'=>$r->productName,
            'description'=>$r->description,
            'price'=>$r->price,
            'quantity'=>$r->quantity,
            'image'=>$imageName,
            'categoryID'=>$r->categoryID,
        ]);
    
        return redirect('admin/addProduct');
    
        }

    
        public function view(){
            $viewAll=Product::all();
            return view('products')->with('products',$viewAll);
        }
    
        public function delete($id){
            $deleteProduct=Product::find($id);
            $deleteProduct->delete();
            return redirect()->route('admin.productList');
        }

        public function adminShow(){
            $products=Product::all();
            return view('admin.productList', compact('products'));
        }
    
        public function productDetail($id){
            $viewAll=Product::all()->where('id',$id); //SQL select * from Products where id= '$id'
            return view('productDetail')->with('products',$viewAll);
        }
    
        public function edit($id){
            $product=Product::all()->where('id',$id);
            //select * from products where id='id'
            return view('admin.editProduct')->with('products', $product);
        }
    
        public function update(){
            $r=request();//get input value from editProduct
            if($r->hasfile('images')!=''){
                $image=$r->file('images'); //get uploaded file from HTML
                $image->move('image',$image->getClientOriginalName()); //image copy to folder under public/image
                $imageName=$image->getClientOriginalName(); //get uploaded image file name
                }
                else{
                    $imageName="";
                }
            $product=Product::find($r->proID);//retrieve record from MYSQL
            $product->name=$r->productName;
            $product->description=$r->description;
            $product->quantity=$r->quantity;
            $product->price=$r->price;
            $product->image=$r->images;
            $product->save();
            //apply SQL: update products set name= '$productName' where id='$productID'
            return redirect()->route('admin.productList');
        }
    
        public function searchProduct(){
            $r=request();
            $keyword=$r->keyword;
            $product=DB::table('products')->where('name','like','%'.$keyword.'%')->get();
            return view('products')->with('products',$product);
        }
}
