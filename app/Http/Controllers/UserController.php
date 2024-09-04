<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }
    public function loginPage()
    {
        return view('users.login');
    }
    public function login()
    {

    }
    public function registerPage()
    {
        return view('users.register');
    }
    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // Encrypt the password
        ]);
        Auth::login($user);
        // Redirect with success message
        return redirect()->route('index')->with('success', 'ثبت نام با موفقیت انجام شد');
    }
}
