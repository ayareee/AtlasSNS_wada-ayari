<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
if($request->isMethod('post')) {

    $request->validate([
              'username' => 'required|unique:users,username|max:15',
              'email' => 'required|unique:users,email',
              'password' => 'required|unique:users,password|max:10',
        ]);


        $username = $request->input('username');
        $mail = $request->input('mail');
        $password = $request->input('password');

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $request->session()->put('username',$username);
        return redirect('added');
}
    }

    public function added(): View
    {
        return view('auth.added');
    }
}
