<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meal;
use App\Models\Food;
use Session;
use DB;

class CaloryController extends Controller
{
    public function addAll(){
        $r=request();
        $add=Meal::create([
            'foodID'=>$r->id,
            'name'=>$r->name,
            'calory'=>$r->calory,
            'quantity'=>$r->quantity,
        ]);
        Session::flash('success', "Item added to cart!");
        return redirect()->route('showFood');
    }

    public function addMeat(){
        $r=request();
        $add=Meal::create([
            'foodID'=>$r->id,
            'name'=>$r->name,
            'calory'=>$r->calory,
            'quantity'=>$r->quantity,
        ]);
        Session::flash('success', "Item added to cart!");
        return redirect()->route('showMeat');
    }

    public function addVegetable(){
        $r=request();
        $add=Meal::create([
            'foodID'=>$r->id,
            'name'=>$r->name,
            'calory'=>$r->calory,
            'quantity'=>$r->quantity,
        ]);
        Session::flash('success', "Item added to cart!");
        return redirect()->route('showVegetable');
    }

    public function addBeverage(){
        $r=request();
        $add=Meal::create([
            'foodID'=>$r->id,
            'name'=>$r->name,
            'calory'=>$r->calory,
            'quantity'=>$r->quantity,
        ]);
        Session::flash('success', "Item added to cart!");
        return redirect()->route('showBeverage');
    }

    public function addFruit(){
        $r=request();
        $add=Meal::create([
            'foodID'=>$r->id,
            'name'=>$r->name,
            'calory'=>$r->calory,
            'quantity'=>$r->quantity,
        ]);
        Session::flash('success', "Item added to cart!");
        return redirect()->route('showFruit');
    }

    public function showModifyMealCalories(){
        $food=DB::table('meals')
        ->leftjoin('food','food.id', '=', 'meals.foodID')
        ->select('meals.quantity as mealQty', 'meals.id as mid', 'food.*')
        ->get();
        return view('modifyMealCalories')->with('meals',$food);
    }

    public function searchFood(){
        $r=request();
        $keyword=$r->keyword;
        $food=DB::table('food')->where('name', 'like', '%'.$keyword.'%')->get();
        return view('showFood')->with('food', $food);
        //select * from products where name like '%$keyword%'  
    }

    public function deleteMeal($id){
        $deleteMeal=Meal::find($id);
        $deleteMeal->delete();
        return redirect()->route('modifyMealCalories');
    }
}
