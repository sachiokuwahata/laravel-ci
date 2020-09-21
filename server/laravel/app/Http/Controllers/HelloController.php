<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Flight;



class HelloController extends Controller
{
    //    
    
    public function index () 
    {

        // $flight = new Flight();
        // $flight->fill(['name' => 'Flight 10', 'flightNumber' => 'WWWWSSSS10']);        
        // $flight->save();        


        Flight::create(
            ['name' => 'Flight 10', 'flightNumber' => 'WWWWSSSS10']        
        );

        return view('index');
    }
}
