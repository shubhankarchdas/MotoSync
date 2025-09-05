<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // select all cars
        // $cars = Car::get();

        //select published cars
        // $cars = Car::where('published_at', '!=', null)->get();

        //select the first car
        // $car = Car::where('published_at', '!=', null)->first();

        
        // $cars = Car::where('published_at', '!=', null)->where('user_id', 1)->orderBy('published_at', 'desc')->limit(2)->get();

        // dump($cars);

        // 1st way to create a car
        // $car = Car::create($carData);

        // // 2nd way to create a car
        // $car2 = new Car();
        // $car2->fill($carData);
        // $car2->save();

        // // 3rd way to create a car
        // $car3 = new Car($carData);
        // $car3->save();

        return  view ('home.index');

    }
}
