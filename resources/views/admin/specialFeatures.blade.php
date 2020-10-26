@extends('layouts.back')

@section('adminContent')
<form action="{{ route('admin.SF.submit') }}" method="POST">
    @csrf
    <input type="text" name="tag">
    <button type="submit">submit</button>
</form>
@endsection