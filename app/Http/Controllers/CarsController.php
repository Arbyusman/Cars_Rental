<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Capacity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.landing_page', compact('cars'));
    }

    public function search()
    {
        $cars = Car::all();
        return view('cars.search_cars', ['cars' => $cars]);
    }

    public function admin()
    {
        $cars = Car::all();
        return view('cars.admin.admin', ['cars' => $cars]);
    }

   

    public function createCarsView()
    {
        $capacity = Capacity::all();

        return view('cars.admin.create_cars', ['capacity' => $capacity]);
    }
    public function createCars(Request $request)
    {


        $request->validate([
            'car_name' => 'required|string|max:255',
            'rent_cost' => 'required|max:255',
            'sizeCar_id' => 'required|max:255',
            'car_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // dd($request);s


        $image = $request->file('car_image');
        $newName = $request->car_name . '_' . $request->rent_cost . '_' .  $request->sizeCar_id . '_' . time()  . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('public/Car_Images', $newName);



        Car::create([
            'car_name' => $request->car_name,
            'rent_cost' => $request->rent_cost,
            'sizeCar_id' => $request->sizeCar_id,
            'created_by' => Auth::user()->name,
            'car_image' => $path,
        ]);
        return redirect('/admin')->with('success', 'Created Successfully.');
    }

    public function updateCarsView($id)
    {

        $car = Car::find($id);
        return view('cars.admin.edit_cars', ['car' => $car]);
    }

    public function updateCars(Request $request,  $id)
    {

        $resource = Car::findOrFail($id);

        $validatedData = $request->validate([
            'car_name' => 'string|max:255',
            'rent_cost' => 'max:255',
            'size_car' => 'max:255',
            'car_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $resource->update($validatedData);
        if ($request->file('car_image')) {

            if ($request->old_image) {
                Storage::delete($request->old_image);
            }

            $image = $request->file('car_image');
            $newName = $request->car_name . '_' . $request->rent_cost . '_' . $request->size_car . '_' . time()  . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/Car_Images', $newName);
            $resource->car_image = $path;
            $resource->updated_by = Auth::user()->name;
            $resource->save();
        }


        return redirect('/admin')->with('success', 'Created Successfully.');
    }

    public function destroy($id)
    {

        $car = Car::find($id);
        $car->deleted_by = Auth::user()->name;
        $car->save();
        if ($car->car_image) {
            Storage::delete($car->car_image);
        }
        $car->delete();


        return redirect()->back()->with('message', 'Record successfully deleted');
    }
}
