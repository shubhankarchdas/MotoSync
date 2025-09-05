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


        // $car = Car::find(1);
        // $car->price = 750000;
        // $car->save();

        // Car::updateOrCreate(
        //     ['vin' => '1HGCM82633A123456'],
        //     ['price' => 900000,]
        // );


        // Car::where('published_at', null)->where('user_id', 1)->update(['published_at' => now()]);

        // $car = Car::find(1);
        // $car->delete();

        // Car::distroy([2,3]);

        //Car::where('published_at', null)->where('user_id', 1)->delete();


        // Car::truncate();

        return  view ('home.index');

    }
}
