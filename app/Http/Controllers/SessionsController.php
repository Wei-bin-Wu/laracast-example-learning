<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($attributes)) {  // intentar loggear usuario
            session()->regenerate(); // para prevenir session fixation

            return redirect('/')->with('success', 'Welcome Back!');
        }

        // auth failed
        // return back()->withInput()->withErrors(['email'=>'Your provided credentials could not be verified.']);
        // withInput para guardar email introducido
        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified.'
        ]);
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}

