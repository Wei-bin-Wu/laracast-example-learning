<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users,username', //   : table, column
//            'username' => ['required','min:3','max:255', Rule::unique('users','username')], // puede añadir ->ignore(...current..)
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:7|max:255',
        ]);

//        $attributes['password']=bcrypt($attributes['password']);

        $user = User::create($attributes);  // eloquent model, function that called when set password in User model
//        User::create([
//            'name' => $attributes['name'],
//            'password'=> bcrypt($attributes['password'])
//        ]);

//        session()->flash('success','Your account has been created.');

        // log in usar helper auth() , o Auth de Facade
        auth()->login($user);

        return redirect('/')->with('success','Your account has been created.');
    }
}
