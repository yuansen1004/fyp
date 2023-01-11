<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\MyCart;
use Session;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function deleteCart($id){
        $deleteItem=MyCart::find($id);
        $deleteItem->delete();
        return redirect()->route('userCart');
    }

    public function addBuyer(){
        $r=request();
        $add=myCart::create([
            'quantity'=>$r->quantity,
            'orderID'=>'',
            'productID'=>$r->id,
            'userID'=>'buyer_id',            
        ]);
        Session::flash('success,"Item added to cart!');
        return redirect()->route('products');
    }

    public function showBuyerCart(){
        $cart=DB::table('my_carts')
        ->leftjoin('products','products.id','=','my_carts.productID')
        ->select('my_carts.quantity as cartQty','my_carts.id as cid','products.*')
        ->where('my_carts.orderID','=','')
        ->where('my_carts.userID','=','buyer_id')
        ->get();
        // SQL: select my_carts.quantity as cartQty,my_cart.id as cid, products.* from my_carts left join products on products.id=my_cart.id where my_carts.orderID='' and my_carts.userID='Auth::id()'
        return view('userCart')->with('carts',$cart);
    }

    public function BuyerCartItem(){
        $cartItem=0;
        $noItem=DB::table('my_carts')
        ->leftjoin('products','products.id','=','my_carts.productID')
        ->select(DB::raw('COUNT(*) as count_item'))
        ->where('my_carts.orderID','=','')
        ->where('my_carts.userID','=','buyer_id')
        ->groupBy('my_carts.userID')
        ->first();
        if($noItem){
            $cartItem=$noItem->count_item;
        }
        Session()->put('cartItem',$cartItem);
    }
 
}
