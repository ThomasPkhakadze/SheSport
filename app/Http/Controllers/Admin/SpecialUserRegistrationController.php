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
        $authors = Author::all();
        return view('admin.user.createNewAuthor', ['authors' => $authors]);
    }

    public function createNewAuthor(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors',
            'password' => 'required|string|min:8',
        ]);

        $password = Hash::make($request->password);

        $author = new Author;
        $author->name = $request->name;
        $author->email = $request->email;
        $author->password = $password;
        $author->save();

        return redirect()->route('author');
    }

    public function deleteAuthor($id)
    {
        $author = Author::find($id);

        $author->delete();

        return redirect()->route('author');
    }

    public function showAdminRegisterForm()
    {
        $admins = Admin::all();
        return view('admin.user.createNewAdmin' , ['admins' => $admins]);
    }

   

    public function createNewAdmin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins',
            'password' => 'required|string|min:8',
        ]);

        $password = Hash::make($request->password);

        $admin = new admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $password;
        $admin->save();

        return redirect()->route('admin.view');
    }

    public function deleteAdmin($id)
    {
        $admin = Admin::find($id);

        $admin->delete();

        return redirect()->route('admin.view');
    }
}
