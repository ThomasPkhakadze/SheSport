@extends('layouts.back')

@section('adminContent')
<form action="{{ route('admin.post.update', $post->id) }}" method="POST">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $post->title }}">

    <label for="desc">Desc</label>
    <input type="text" name="desc" value="{{ $post->desc }}">

    <label for="body">Body</label>
    <input type="text" name="body" value="{{ $post->body }}">

    <button type="submit">Submit</button>
    <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
</form>
@endsection