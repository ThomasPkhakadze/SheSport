<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class DashboardController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth:author');
    }

    public function getAuthorDashboard() {
        return view('author.dashboard');
    }

    public function seeAllPosts(){
        $posts = Post::whereHas('author', function(builder $query) {
            $query->where('content', 'like', Auth::user()->name);
        })->get();

        return view('author.post', ['posts' => $posts]);
    }
    
    public function requestPostApproval(Request $request) 
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'body' => 'required',
            'sportsType' =>'nullable',
            'category' => 'nullable',
            'tag' => 'nullable', 
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable'
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->body = $request->body;
        
        if(!empty($request->sportsType)){
            return  $post->sportsType = $request->sportsType;

        }

        if(!empty($request->category)){
            return  $post->category = $request->category;
        }

        if(!empty($request->tag)){
            return  $post->tag = $request->tag;
        }

        if(!empty($request->img)){
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $post->image = $lastPath; 
        }

        if(!empty($request->img)){
            $newfilename = time() . rand() . '.' . $request->file('video')->extension();
            $path = $request->file('video')->move(public_path("videos/"), $newfilename);
            $lastPath = "videos/" . $newfilename;
            $request['video'] = $lastPath;
            $post->video = $lastPath; 
        }
       
        $post->isPublished = false;
        $post->author = Auth::user()->name;

        $post->save();

        return redirect()->route('author.post');
    }
    
    public function editRequestedPost($id) 
    {
        $post = Post::find($id);
        return view('author.editPost', ['post' => $post]);
    }

    public function updateRequestedPost($id, Request $request)
    {
        $post = Post::find($id);

        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'body' => 'required',
            'sportsType' =>'nullable',
            'category' => 'nullable',
            'tag' => 'nullable', 
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable'
        ]);

        
        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->body = $request->body;
        
        if(!empty($request->sportsType)){
            return  $post->sportsType = $request->sportsType;

        }

        if(!empty($request->category)){
            return  $post->category = $request->category;
        }

        if(!empty($request->tag)){
            return  $post->tag = $request->tag;
        }

        if(!empty($request->img)){
            $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $post->image = $lastPath; 
        }

        if(!empty($request->img)){
            $newfilename = time() . rand() . '.' . $request->file('video')->extension();
            $path = $request->file('video')->move(public_path("videos/"), $newfilename);
            $lastPath = "videos/" . $newfilename;
            $request['video'] = $lastPath;
            $post->video = $lastPath; 
        }
       
        $post->isPublished = false;

        $post->save();

        return redirect()->route('auth.post');
    }

    public function deleteRequestedPost($id) {
        
        $post =  Post::findOrFail($id);
        
        if($post->isPublished === false){
            $post->delete();
        }

        return redirect()->route('author.post');
    }
}
