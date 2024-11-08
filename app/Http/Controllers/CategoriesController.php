<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required',
            'status'
        ]); 

        DB::table('categories')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'status' => $request->input('status')
        ]);

        return redirect('/category');
    }

    public function index(){
        $categories = DB::table('categories')->get();

        return view('categories.index',['categories'=> $categories]);
    }

    public function show($id){
        $category = DB::table('categories')->find($id);

        return view('categories.show',['category'=> $category]);
    }

    public function edit($id){
        $category = DB::table('categories')->find($id);

        return view('categories.edit',['category'=> $category]);
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required',
            'status'
        ]); 

        DB::table('categories')
        ->where('id', $id)
        ->update(
            [
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'status' => $request->input('status')
            ]
            );
            return redirect('/category');
    }

    public function destroy($id){
        DB::table('categories')->where('id','=', $id)->delete();

        return redirect('/category');

    }
}
