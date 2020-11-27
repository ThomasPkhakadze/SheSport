<?php

namespace App\Http\Controllers;


use App\Events\MessageSent;
use App\Author;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Slider;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sliders = Slider::all();
        $posts = Post::all();
        return view('front.welcome', ['posts' => $posts, 'sliders' => $sliders]);
    }

    

    public function submitSubscribtion(Request $request)
    {
        $this->validate($request,[
            'user_id' => 'required|numeric',
            'subscribable' => 'required|string'
        ]);

        $subscribtion = new Subscription;
        $subscription->user_id = $request->user_id;
        $subscription->subscribable = $request->subscribable;
        $subscription->save();
    }



    public function sendNotification()
    {
        //  Subscribable strings: Tag SportType Category

        $subscribable = [
            'tag' => $request->tag,
            'sport_type' => $request->sport_type,
            'category' => $request->category
        ]; 
        
        // Divide strings with comas TresComas ;)

        $tag = explode(',', $subscibable['tag']);
        $sport_type = explode(',', $subscribable['Sport_type']);
        $category = explode(',', $subscribable['category']);

        // Loop thru array and if true send notification

        for ( $i = 0; $i < count($tag); $i++){   
    
            $sub = Subscription::firstWhere('subscribable', $tag[$i]);
            
            if ( $sub != null){
                
                $user_id = $sub->user_id;
                        
                $notification = new Notification;
                $notification->to = $user_id;
                $notification->subject = $sub->subscribable;
                $notification->text = 'blabla';
                $notification->save();

            }           
           
        }
    }
}