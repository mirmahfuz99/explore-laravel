<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Cache;

class CarController extends Controller
{

    public function index(){
        $cars = Car::all(); //retrive all car

        Cache::put('cachekey', 'This should be a cache key!', now()->addDay());

        Cache::forever('cachekey2', 'Key 2');

        if(Cache::has('cachekey2')){
            dd('Cache does exist');
        }


        dd(
            Cache::get('cachekey2')
        );
        return view('cars.index', compact('cars'));
    }

    public function create(){
        return view('add_car');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . (date('Y') + 1), // Assumption: Cars cannot be from the future.
            'color' => 'nullable|string|max:255',
            'price' => 'nullable|numeric',
            'file' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
            // Add more validation rules for other car details if needed.
        ]);

        $car = Car::create($validatedData);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $car->saveFile($file);
        }




        return redirect()->route('car.index')->with('success', 'Car added successfully!');
    }


}
