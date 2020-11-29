@extends('layouts.back')

@section('adminContent')
<form action="{{ route('admin.slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $slider->title }}">

    <label for="text">Text</label>
    <input type="text" name="text" value="{{ $slider->text }}">

    <label for="image">image</label>
    <input type="file" name="image" >
    <img src="{{ asset($slider->image) }}" alt="ss" width="150px">

    <button type="submit">Submit</button>
</form>
@endsection