<?php
namespace App\Http\Controllers;
use App\Models\Food;
use Illuminate\Http\Request;
class FoodCRUDController extends Controller
{

public function index()
{
    $data['foods'] = Food::orderBy('id','desc')->paginate(3);
    return view('foods.index', $data);
}

// public function showview()
// {
//     $data['foodss'] = DB::table('food')->select('category', '3333')->get();
//     return view('foods.index', $data);
// }

public function create()
{
    return view('foods.create');
}

    public function store(Request $request)
{
    $request->validate([
    'name' => 'required',
    'price' => 'required',
    'sub' => 'required',
    'img' => 'required',
    'category' => 'required'
    ]);
    $food = new Food;
    $food->name = $request->name;
    $food->price = $request->price;
    $food->sub = $request->sub;
    $food->img = $request->img;
    $food->category = $request->category;
    $food->save();
    return redirect()->route('foods.index')
    ->with('success','Food has been created successfully.');
}

public function destroy(Food $food)
{
    $food->delete();
    return redirect()->route('foods.index')
    ->with('success','Food has been deleted successfully');
}
}