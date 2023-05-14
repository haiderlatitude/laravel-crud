<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('crud', compact('users'));
    }

    public function store(Request $request){
        if(User::where('email', $request->email)->first()){
            return redirect('addUser')->with('message', 'User already exists!');
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('crud')->with('message', 'User has been added successfully!');
    }

    public function destroy($id){
        User::find($id)->delete();
        return redirect('crud')->with('message', 'The user has been deleted!');
    }
}
