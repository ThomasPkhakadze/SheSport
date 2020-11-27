<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Tag;
use App\Category;
use App\Sport;

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
        $posts = Post::all();
        $tags = Tag::all();
        $categories = Category::all();
        $sport_types = Sport::all();

        return view('author.post',
        [
            'posts' => $posts,
            'tags' => $tags,
            'categories' => $categories,
            'sport_types' => $sport_types
        
        ]);
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
            'video' => 'nullable',
            'author_id' => 'required'
        ]);

        $post = new Post;
        
        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->body = $request->body;
        // $post->sportsType = $request->sportsType;      
        // $post->category = $request->category;
        // $post->tag = $request->tag;
        

        // $newfilename = time() . rand() . '.' . $request->file('image')->extension();
        //     $path = $request->file('image')->move(public_path("images/"), $newfilename);
        //     $lastPath = "images/" . $newfilename;
        //     $request['image'] = $lastPath;
        //     $post->image = $lastPath; 
        

        //  $newfilename = time() . rand() . '.' . $request->file('video')->extension();
        //     $path = $request->file('video')->move(public_path("videos/"), $newfilename);
        //     $lastPath = "videos/" . $newfilename;
        //     $request['video'] = $lastPath;
        //     $post->video = $lastPath; 
        
       
        $post->is_published = false;
        $post->published_by_admin = false;
        $post->author_id = $request->author_id;

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
       
        $post->is_published = false;
        $post->published_by_admin = false;

        $post->save();

        return redirect()->route('auth.post');
    }

    public function deleteRequestedPost($id) {
        
        $post =  Post::findOrFail($id);
        
        if($post->is_published === false){
            $post->delete();
        }

        return redirect()->route('author.post');
    }
}
