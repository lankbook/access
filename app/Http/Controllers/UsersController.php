<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use Illuminate\Http\Request;
use ILLuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function create()
    {
        return view('template');
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'email' => 'bail|required|email',
            'password' => 'bail|required|max:10',
        ]);
        $connection = new \App\Models\Connection;
        $connection->name = $request->name;
        $connection->firstname = $request->firstname; 
        $connection->email = $request->email;
        $connection->statu = $request->statu;
        $connection->role = $request->role;
        $connection->password = bcrypt($request->password);
        $connection->save();
        return "C'est bien enregistré !";
        
        
    }

    public function loginview()
    {
        return view('login');

    }
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'bail|required|email',
            'password' => 'bail|required|max:10',
        ]); 

    }
    public function admin(){

          $connection = Connection::all();
        
            return view('admin', compact('connection'));
        
        
    }
}
