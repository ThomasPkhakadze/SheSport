<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialUserLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showAuthorLoginForm()
    {
        return view('author.login');
    }

    public function authorLogin(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        // Attempt to log the user in
        if(Auth::guard('author')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->intended(route('author.dashboard'));
        }

        // if unsuccessful
        return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function showRedactorLoginForm()
    {
        return view('redactor.login');
    }

    public function redactorLogin(Request $request)
    {
        // Validate form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        // Attempt to log the user in
        if(Auth::guard('redactor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
            return redirect()->intended(route('redactor.dashboard'));
        }

        // if unsuccessful
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
