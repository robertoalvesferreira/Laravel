<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TesteController extends Controller
{
    public function store(Request $request)
    {
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;   
        // $user->save();
        //$ss = Hash::make(123456);
       
        $user = User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password'))
        ]);
         
        return response()->json($user);
    }

    public function index()
    {
        return response()->json(User::All());
    }
}
