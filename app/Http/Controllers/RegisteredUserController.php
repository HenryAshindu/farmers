<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $UserData = $request-> validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required','confirmed', Password::min(6)],
        ]);

        $newUser = User::create($UserData);

        Auth::login($newUser);

        return redirect('/products');
    }

}
