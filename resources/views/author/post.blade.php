@extends('layouts.back')

@section('authorContent')


<div class="card">
    <div class="card-header d-flex p-0">
      <h3 class="card-title p-3">Tabs</h3>
      <ul class="nav nav-pills ml-auto p-2">
        <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">View</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Create</a></li>
      </ul>
    </div><!-- /.card-header -->
    <div class="card-body">
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
            @if($posts !== null)

                @foreach($posts as $post)
                {{ $post->body }}
                @endforeach
            
            @endif
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
            <form action="{{ route('author.post.submit') }}" method="POST">
                @csrf
            
                <label for="title">Title</label>
                <input type="text" name="title">
            
                <label for="desc">Desc</label>
                <input type="text" name="desc">
            
                <label for="body">Body</label>
                <input type="text" name="body">
            
                <button type="submit">Submit</button>
                <input type="hidden" name="author_id" value="{{ Auth::user()->id }}">
            </form>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div><!-- /.card-body -->
</div>


@endsection