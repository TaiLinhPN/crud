<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index(){
        $users = User::all();
        return view('user.index', compact('users'));
    }
    public function create(){
        return view("user.create");
    }
    public function store(Request $request){
        $data = $request->all();
        User::create($data);
        echo"ok";
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->fill([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        $user->save();
        echo"ok";
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        echo"ok";
    }
}
