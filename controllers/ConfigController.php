<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function show(){
        $categories = ['Недвижимость','Машины','Животные'];
        $posts = Product::all();
        return view('show', compact('posts','categories'));
    }

    public function create(){
        $user = auth()->user();
        return view('create',compact('user'));

    }
    public function store(Request $request){

        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'username_login'=>'',
            'category'=>'',
        ]);
        Product::create($data);
        return redirect()->route('home');
    }

    public function delete(Product $product){
        $product->delete();
        return redirect()->route('home');
    }

    public function search(Request $request)
    {
        $categories = ['Недвижимость','Машины','Животные'];
        $s = $request->s;
        $posts = DB::table('products')->Where('title','LIKE',"%$s%")->get();
        return view('show',compact('posts','categories'));
    }

    public function searchCategory($category){
        $categories = ['Недвижимость','Машины','Животные'];
        $posts = DB::table('products')->Where('category','=',$category)->get();
        return view('show',compact('posts','categories'));
    }
}
