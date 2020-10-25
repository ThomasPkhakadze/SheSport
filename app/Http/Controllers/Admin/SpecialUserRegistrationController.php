<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Author;
use App\Admin;

class SpecialUserRegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showAuthorRegisterForm()
    {
        return view('admin.createNewAuthor');
    }

    public function createNewAuthor(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request['password'] = Hash::make($request->password);
        Author::create($request->all());

        return redirect()->intended(route('admin.dashboard'));
    }

    public function showAdminRegisterForm()
    {
        return view('admin.createNewAdmin');
    }

    public function createNewAdmin(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $request['password'] = Hash::make($request->password);
        Admin::create($request->all());

        return redirect()->intended(route('admin.dashboard'));
    }
}
