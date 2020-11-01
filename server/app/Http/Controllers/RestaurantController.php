<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $category = $request->category;

        $query = Restaurant::query();

        if($name) {
            $query->where('name', 'like', '%'. $name . '%');
        }
        if($category) {
            $query->whereHas('category', function($q) use ($category){
            $q->where('name', 'like', '%' . $category . '%');
            });
            // リレーション先の検索をするときはHas、ダブルリターン
        }
        $restaurants = $query->simplePaginate(10);
        $restaurants->appends(compact('name', 'category'));
        // 配列に追加するときにappendsが使える
        // クエリーに情報を追加していく

        // 検索方法①if(!empty($name)){
        //     $restaurants = Restaurant::where('name', 'like', '%' . $name . '%');
        //     // 曖昧検索likeと％前方一致とかも
        // }else{
        //     $restaurants = Restaurant::all();
        // }
        // $restaurants = Restaurant::simplepagenate(10);
        // $restaurants = Restaurant::all()->sortByDesc("recommend");
        // $restaurants = Restaurant::orderByRaw("recommend")->get();
        
    
        // $restaurants = DB::table('restaurants')
        //     ->orderByRaw('recommend IS NULL ASC')
        //     ->orderBy('recommend', 'ASC')
        //     ->get();
        return view('restaurants.index', compact('restaurants'));
    
    }

    public function show($id)
    {
        $restaurant = Restaurant::find($id);
        return view('restaurants.show', compact('restaurant'));
    }
}
