<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\events\PostPublished;

use App\Notification;
use App\Subscription;

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


    public function showAllPosts()
    {
        $posts = Post::all();

        return view('admin.post.post', ['posts' => $posts]);
    }

    public function createPost(Request $request)
    {
        // Validate Request
        $this->validate($request,[
            'title' => 'required',
            'desc' => 'nullable',
            'body' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg | max:20000',
            'tag' => 'nullable',
            'sport_type' => 'nullable',
            'category' => 'nullable',
            'admin_id' => 'required' 
        ]);

        // Create New Post

        $post = new Post;

        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->body = $request->body;
        $post->tag = $request->tag;
        $post->sport_type = $request->sport_type;
        $post->category = $request->category;
        $post->author_id = $request->admin_id;
        $post->published_by_admin = true;
        $post->is_published = true;

        $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $post->image = $lastPath; 

        $post->save();


        return redirect()->route('admin.post');
        
    }

    public function editPost($id)
    {
        $post = Post::find($id);

        return view('admin.post.editPost', ['post' => $post]);
    }

    public function updatePost(Request $request, $id)
    {
        // Find desired post
        $post = Post::find($id);

        // Validate Request
        $this->validate($request,[
            'title' => 'required',
            'desc' => 'nullable',
            'body' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|mimes:mp4,mov,ogg | max:20000',
            'tag' => 'nullable',
            'sport_type' => 'nullable',
            'category' => 'nullable',
            'admin_id' => 'required' 
        ]);


        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->body = $request->body;
        $post->tag = $request->tag;
        $post->sport_type = $request->sport_type;
        $post->category = $request->category;
        $post->author_id = $request->admin_id;
        $post->published_by_admin = true;
        $post->is_published = true;

        if(!empty($request->image)){
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $post->image = $lastPath;
        } 

        $post->save();


        return redirect()->route('admin.post');
    }

    public function approvePost(Request $request)
    {
        $post = Post::find($request->post_id);

        $post->is_published = true;
        $post->save();
        return redirect()->route('admin.post');
    }

    public function deletePost(Request $request)
    {
        $post = Post::find($request->post_id);

        $post->delete();

        return redirect()->route('admin.post');
    }
    

    public function createSport(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        $sport = new Sport;

        $sport->name = $request->name;
        $sport->save();
    }

    public function deleteSport($id)
    {
        $sport = Sport::find($id);
        $sport->delete();
    }

    public function createTag(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
            
        ]);
        
        $tag = new Tag;
        $tag->name = $request->name;
        $tag->save();


    }

    public function deleteTag($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

    }

    public function createCategory(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        $category = new Category;

        $category->name = $request->name;
        $category->save();
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();

    }
}

