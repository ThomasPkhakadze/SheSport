<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function view(){

        $sliders = Slider::all();

        return view('admin.slider.slider', ['sliders' => $sliders]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'text' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $slider = new Slider;

        $slider->title = $request->title;
        $slider->text = $request->text;


        $newfilename = time() . rand() . '.' . $request->file('image')->extension();
        $path = $request->file('image')->move(public_path("images/"), $newfilename);
        $lastPath = "images/" . $newfilename;
        $request['image'] = $lastPath;
        $slider->image = $lastPath;
        
        $slider->save();
        


        return redirect()->route('admin.slider');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);

        return view('admin.slider.editSlider', ['slider' => $slider]);
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);

        $this->validate($request,[
            'title' => 'required',
            'text' => 'required', 
            'image' => 'required|image'
        ]);

        $slider->title = $request->title;
        $slider->text = $request->text;


        $newfilename = time() . rand() . '.' . $request->file('image')->extension();
            $path = $request->file('image')->move(public_path("images/"), $newfilename);
            $lastPath = "images/" . $newfilename;
            $request['image'] = $lastPath;
            $slider->image = $lastPath;    
            
        $slider->save();

        return redirect()->route('admin.slider');
    }

    public function delete($id)
    {
        $slider = Slider::find($id);

        $slider->delete();

        return redirect()->route('admin.slider');
    }
}
