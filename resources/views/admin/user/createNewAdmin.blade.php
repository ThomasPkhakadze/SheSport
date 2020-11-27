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
                    <!-- /.col -->
                    <div class="col-12">
                        <div class="card" >
                          <div class="card-header">
                            <h3 class="card-title">Existing Sliders</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example3" class="table table-bordered table-hover">
                                <thead>
                                  <tr>
                                    <th>Title</th>
                                    <th>Text</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($sliders as $slider)
                                   <tr>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->text }}</td>
                                    <td><img src="{{ asset($slider->image) }}" alt="" width="250px" height="200px"></td>
                                    <td>
                                        <button class="button-blue" > <a href="{{ route('admin.slider.edit', $slider->id) }}"> Edit</a></button>
                                    
                                        <form action="{{ route('admin.slider.delete', $slider->id) }}" method="POST">
                                            @csrf
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                  </tr>
                                     
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
            <form action="{{ route('admin.slider.submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <label for="title">Title</label>
                <input type="text" name="title">
            
                <label for="text">Text</label>
                <input type="text" name="text">
            
                <label for="image">image</label>
                <input type="file" name="image">
            
                <button type="submit">Submit</button>
            </form>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div><!-- /.card-body -->
</div>
@endsection