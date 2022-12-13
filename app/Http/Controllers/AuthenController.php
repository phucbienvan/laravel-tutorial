<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthenService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    public function __construct(AuthenService $authenService)
    {
        $this->authenService = $authenService;
    }
    public function getFormRegister()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        if ($this->authenService->register($request->all())) {
            return redirect()->back()->with([
                'success' => 'created user success'
            ]);           
        }

        return redirect()->back()->with([
            'fail' => 'created user Fail'
        ]);
    }

    public function getFormLogin()
    {
        return view('login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->except(['_token', '_method']))) {
            $request->session()->regenerate();

            return redirect()->route('post.index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
