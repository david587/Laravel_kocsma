<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDrinkRequest;
use App\Http\Requests\UpdateDrinkRequest;

class DrinkController extends Controller
{
    public function index(){
        return view("new_kocsma");
    }

    public function storeKocsma(Request $request){
        //get the id
        $typeModel = new Type;
        $typeModel->name=$request->type;
        $typeModel->save();

        $type = $request->type;
        $types = Type::where("name",$type)->get();
        $type_id = 0;
        foreach($types as $type)
            $type_id = $type->id;

            $drinkModel = new Drink;
            $drinkModel->name=$request->name;
            $drinkModel->price=$request->price;
            $drinkModel->type_id= $type_id;
            $drinkModel->save();

            $request->session()->flash("succes","Sikeres irás");
            return redirect("/uj-kocsma");
    }
    
    public function list(){
        //egy a többhöz kapcsolat
        //modelben->belongs to hasmany
        $drinks = Drink::with("type")->get();
        return view("/list_kocsma",[
            "drinks"=> $drinks
    ]);
    }

    public function showKocsma(Request $request){
    $name = $request->name;
    $drinks = Drink::
    with("type")->where("name",$name)->get();
    return view("/list_kocsma",[
        "drinks"=> $drinks
        ]);
    }

    public function showUpdateDrink(Request $request){
        $name = $request->name;
        $drinks = Drink::with("type")->where("name",$name)->first();
        return view("/update_drink",[
            "drink"=> $drinks
        ]);
    }

    public function updateDrink(Request $request){
        $type = $request->type;
        $types = Type::where("name",$type)->get();
        $type_id = 0;
        foreach($types as $type)
            $type_id = $type->id;
        
       
            $drinks = Drink::where("name",$request->name)->first();

            $drinks ->name = $request->name;
            $drinks-> price = $request->price;
            $drinks-> type_id = $type_id;
    
            $drinks->save();
            return redirect("/");
        return redirect("/list-kocsma");
    }

    public function destroy(Request $request){
        
        $drink = Drink::where("name",$request->name)->first();
        $id = $drink->id;
        $drink->delete($id);
        return redirect("/");
    }

    

}

