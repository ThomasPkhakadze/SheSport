<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Sport;
use App\Category;
use App\Tag;
use App\Post;

class DashboardController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth:admin');
    }

    public function getAdminDashboard() {
        return view('admin.dashboard');
    }

    public function addSpecialFeatures() {
        $sports = Sport::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.specialFeatures', [
            'sports' => $sports,
            'categories' => $categories,
            'tags' => $tags
        ]);
    }
    public function submitSpecialFeatures(Request $request)
    {
        $this->validate($request,[
            'sport' => 'nullable',
            'category' => 'nullable',
            'tag' => 'nullable'
        ]);

        if(!empty($request->sport)) {
            $sport = new Sport;
            $sport->name = $request->name;
            $sport->save();
        }

        if(!empty($request->category)) {
            $category = new Category;
            $category->name = $request->category;
            $category-> save();
        }

        if(!empty($request->tag)) {
            $tag = new Tag;
            $tag->name = $request->tag;
            $tag->save();
            
        }

        return redirect()->route('admin.SF');
    }

    public function seeAllPosts()
    {
        $posts = Post::all();

        return view('admin.post', ['posts' => $posts]);
    }
}
