<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HousesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses=House::all();

        return view('houses.index', ['houses' => $houses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('houses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imageName = time().'.'. $request->image->extension();

        $request->image->move(public_path('image'), $imageName);

        House::create([
            'name' =>$request->input('name'),
            'description' =>$request->input('description'),
            'location' =>$request->input('location'),
            'land_area' =>$request->input('land_area'),
            'building_area' =>$request->input('building_area'),
            'floor_count' =>$request->input('floor_count'),
            'bedroom_count' =>$request->input('bedroom_count'),
            'bathroom_count' =>$request->input('bathroom_count'),
            'price' =>$request->input('price'),
            'unit_count' =>$request->input('unit_count'),
            'status' =>$request->input('status'),
            'image' =>$imageName
        ]);

        return redirect('/houses');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $house = DB::table('houses')->find($id);

        return view('houses.show',['house'=> $house]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $house = DB::table('houses')->find($id);

        return view('houses.edit',['house'=> $house]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $house= House::find($id);

        if($request->has('image')){
            File::delete('image/'.$house->image);

            $imageName = time().'.'. $request->image->extension();

            $request->image->move(public_path('image'), $imageName);

            $house->image= $imageName;
        }

        DB::table('houses')
        ->where('id', $id)
        ->update(
            ['name' =>$request->input('name'),
            'description' =>$request->input('description'),
            'location' =>$request->input('location'),
            'land_area' =>$request->input('land_area'),
            'building_area' =>$request->input('building_area'),
            'floor_count' =>$request->input('floor_count'),
            'bedroom_count' =>$request->input('bedroom_count'),
            'bathroom_count' =>$request->input('bathroom_count'),
            'price' =>$request->input('price'),
            'unit_count' =>$request->input('unit_count'),
            'status' =>$request->input('status'),
            'image' =>$imageName
            ]
            );
            return redirect('/houses');
        


        //     $house->name =$request->input('name');
        //     $house->description =$request->input('description');
        //     $house->location =$request->input('location');
        //     $house->land_area =$request->input('land_area');
        //     $house->building_area =$request->input('building_area');
        //     $house->floor_count =$request->input('floor_count');
        //     $house->bedroom_count =$request->input('bedroom_count');
        //     $house->bathroom_count =$request->input('bathroom_count');
        //     $house->price =$request->input('price');
        //     $house->unit_count =$request->input('unit_count');
        //     $house->status =$request->input('status');

        //     $house->save();

        // return redirect('/houses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
