<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    // A method that shows all the cars.

    public function index(){
        // Here we can set what user choose instead of 5
        // We already have perPage as a parameter or request attribute
        // We can set a default value
        $cars=Car::paginate(request('perPage', 5));

        return view('index',['cars'=>$cars]);
    }

    // A method redirects us to create a new car page

    public function create(){
        return view('create');
    }

    // A method that stores a new car.

    public function store(Request $request){
        $make=$request['make'];
        $model=$request['model'];
        $produced_on=$request['produced_on'];

        $car=new Car();

        $car->make=$make;
        $car->model=$model;
        $car->produced_on=$produced_on;

        $car->save();

        return redirect()->back();
    }

    // A method that redirects us to the Edit page.

    public function edit($car_id){

        $car = Car::findOrFail($car_id);

        return view('edit',[
            "car" => $car
        ]);
    }

    // A method that updates car info.

    public function update($car_id){

        $car = Car::findOrFail($car_id);
        $car->make = request()->input("make");
        $car->model = request()->input("model");
        $car->produced_on = request()->input("produced_on");
        $car->update();

        return redirect()->route("cars.index");
    }

    // A method that deletes a car.

    public function destroy($car_id){
        Car::destroy($car_id);
        return redirect()->route("cars.index");
    }
}
