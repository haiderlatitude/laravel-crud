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
        return redirect('/')->with('message', 'User has been added successfully!');
    }

    public function destroy($id){
        User::find($id)->delete();
        return redirect('/')->with('message', 'User has been deleted successfully!');
    }

    public function update(Request $request){
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password === "New Password")
            $user->password = $user->password;
        else
            $user->password = $request->password;
        
        $user->save();
        return redirect('/')->with('message', 'User details have been updated successfully!');
    }
}
