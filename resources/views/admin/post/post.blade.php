@extends('layouts.back')

@section('adminContent')
<div class="card" style="width: 100%">
    <div class="card-header d-flex p-0">
      <h3 class="card-title p-3">Tabs</h3>
      <ul class="nav nav-pills ml-auto p-2">
        <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">View</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Create</a></li>
      </ul>
    </div><!-- /.card-header -->
    <div class="card-body">
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1" >
            <section class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12">
                      <div class="card" >
                        <div class="card-header">
                          <h3 class="card-title">Posts Pending approval</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table id="example2" class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Content</th>
                                <th>Author</th>
                                <th>Action</th>

                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($posts as $post)
                               @if ($post->is_published == false)
                               <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->desc }}</td>
                                <td>{{ $post->body }}</td>
                                {{-- Check if Post was published by admin --}}
                                @switch($post->published_by_admin)

                                    @case(true)

                                    <td>{{ $post->admin->name }}</td> 

                                        @break

                                    @case(false)

                                    <td>{{ $post->author->name }}</td>

                                        @break
                                                                           
                                @endswitch
                                
                                <td>
                                    <button class="button-blue" > <a href="{{ route('admin.post.edit', $post->id) }}"> Edit</a></button>
                                    
                                    <form action="{{ route('admin.post.delete') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button type="submit">Delete</button>
                                    </form>

                                    <form action="{{ route('admin.post.approve') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <button type="submit">Approve</button>
                                    </form>
                                </td>
                              </tr>
                               @endif  
                              @endforeach
                              
                            </tbody>
                          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
        
                    </div>
                    <!-- /.col -->
                    <div class="col-12">
                        <div class="card" >
                          <div class="card-header">
                            <h3 class="card-title">Published posts</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example3" class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Content</th>
                                    <th>Author</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($posts as $post)
                                   @if ($post->is_published == true)
                                   <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->desc }}</td>
                                    <td>{{ $post->body }}</td>
                                    <td>{{ $post->admin->name }}</td>
                                    <td>
                                        <button class="button-blue" > <a href="{{ route('admin.post.edit', $post->id) }}"> Edit</a></button>
                                    
                                        <form action="{{ route('admin.post.delete') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                  </tr>
                                   @endif  
                                  @endforeach
                                  
                                </tbody>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
          
                      </div>
                      <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
              </section>
              <!-- /.content -->
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
            <form action="{{ route('admin.post.submit') }}" method="POST">
                @csrf
            
                <label for="title">Title</label>
                <input type="text" name="title">
            
                <label for="desc">Desc</label>
                <input type="text" name="desc">
            
                <label for="body">Body</label>
                <input type="text" name="body">
            
                <button type="submit">Submit</button>
                <input type="hidden" name="admin_id" value="{{ Auth::user()->id }}">
            </form>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div><!-- /.card-body -->
</div>
@endsection