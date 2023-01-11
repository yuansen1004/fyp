<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use DB;
use Auth;
use App\Models\myCart;
use App\Models\myOrder;
use Session;
use Notification;

class PaymentController extends Controller
{
    public function paymentPost(Request $request)
    {
	       
	Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $request->sub*100,
                "currency" => "MYR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose of Healthy Dude",
        ]);

        $newOrder=myOrder::Create([
            'paymentStatus'=>'Done',
            'userID'=>Auth::id(),
            'amount'=>$request->sub,
        ]);
        //get latest orderID just now create
        $orderID=DB::table('my_orders')->where('userID','=',Auth::id())->orderBy('created_at','desc')->first();
        $items=$request->input('cid');
        foreach($items as $item=>$value){
            $cart=myCart::find($value);
            $cart->orderID=$orderID->id;
            $cart->save();    
        }
        (new CartController)->BuyerCartItem();
        return back();

    }
}
