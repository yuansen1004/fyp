<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Meal;
use DB;

class FoodController extends Controller
{
    public function add(){

        $r=request();
        if($r->file('image')!=''){
        $image=$r->file('image');//get uploaded file from HTML
        $image->move('image', $image->getClientOriginalName());//Image copy to folder under piblic/images
        $imageName=$image->getClientOriginalName();//get uploaded image file name
        }
    
        else{
            $imageName="empty.jpg";
        }
    

        $addFood=Food::create([
            'name'=>$r->foodName,
            'calory'=>$r->foodCalory,
            'quantity'=>$r->foodQuantity,
            'image'=>$imageName,
            'categoryID'=>$r->categoryID,
    ]);
    
        return view('addFood');
        }

        public function show(){
            $viewAll = Food::all();
            return view('showFood')->with('food', $viewAll);
        }

        public function Meat() {
            $viewAll = Food::all()->where('categoryID',value("2"));
            return view('showMeat')->with('food',$viewAll);
        }

        public function Vegetable() {
            $viewAll = Food::all()->where('categoryID',value("3"));
            return view('showVegetable')->with('food',$viewAll);
        }

        public function Beverage() {
            $viewAll = Food::all()->where('categoryID',value("4"));
            return view('showBeverage')->with('food',$viewAll);
        }

        public function Fruit() {
            $viewAll = Food::all()->where('categoryID',value("5"));
            return view('showFruit')->with('food',$viewAll);
        }


        public function view(){
            $viewAll = Food::all();
            return view('viewFood')->with('food', $viewAll);
        }

        public function delete($id){
            $deleteFood=Food::find($id);
            $deleteFood->delete();
            return redirect()->route('viewFood');
        }

        public function deleteMeal($id){
            $deleteFood=Meal::find($id);
            $deleteFood->delete();
            return redirect()->route('modifyMealCalories');
        }

        public function edit($id){
            $food=Food::all()->where('id', $id);
            return view('editFood')->with('food', $food);
        }

        public function update(){
            $r=request();
            if($r->hasfile('images')!=''){
                $image=$r->file('images');
                $image->move('image', $image->getClientOriginalName());
                $imageName=$image->getClientOriginalName();
                }
            
                else{
                    $imageName="empty.jpg";
                }

            $food=Food::find($r->foodID);
            $food->name=$r->foodName;
            $food->calory=$r->foodCalory;
            $food->image=$r->image;
            $food->categoryID=$r->categoryID;
            $food->save();
            return redirect()->route('viewFood');
        }

        public function searchFood(){
            $r=request();
            $keyword=$r->keyword;
            $food=DB::table('food')->where('name', 'like', '%'.$keyword.'%')->get();
            return view('showFood')->with('food', $food);
            //select * from products where name like '%$keyword%'  
        }
}

