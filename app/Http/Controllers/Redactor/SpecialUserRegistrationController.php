<?php

namespace App\Http\Controllers\Redactor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Author;
use App\Redactor;

class SpecialUserRegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('redactor');
    }

    public function showAuthorRegisterForm()
    {
        return view('author.register');
    }

    public function authorRegister(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request['password'] = Hash::make($request->password);
        Author::create($request->all());

        return redirect()->intended(route('author.dashboard'));
    }

    public function showRedactorRegisterForm()
    {
        return view('redactor.register');
    }

    public function redactorRegister(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request['password'] = Hash::make($request->password);
        Redactor::create($request->all());

        return redirect()->intended(route('redactor.dashboard'));
    }
}
