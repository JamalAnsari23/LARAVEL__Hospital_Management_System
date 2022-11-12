
<!DOCTYPE html>
<html lang="en">
  <head>

  	<base href="/public">

  	<style type="text/css">
  		label{
  			display: inline-block;
  			width: 200px;
  		}
  	</style>

  	<!-- Required meta tag -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">

      	<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      @if (session('status'))
      <h4 class="alert alert-success">{{session('status')}}</h4>
      @endif
      <div class="card">
        <div class="card-header">
          <h4> Edit Slider
            <a href="" class="btn btn-danger btn-sm float-right">Back</a>
          </h4>
          
        </div>
        <div class="card-body">
          <!-- Your slider data -->
          <form action="{{ url('editslider',$slider->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">Heading</label>
              <input type="text" name="heading" class="form-control" value="{{$slider->heading}}">
            </div>

            <div class="form-group">
              <label for="">Description</label>
              <textarea style="background: white;" name="description" class="form-control">{{$slider->description}}</textarea>
            </div>

            <div class="form-group">
              <label for="">Link</label>
              <input type="text" name="link" class="form-control"value="{{$slider->link}}">
            </div>

            <div class="form-group">
              <label for="">Link Name</label>
              <input type="text" name="link_name" class="form-control"value="{{$slider->link_name}}">
            </div>

            <div class="form-group">
              <label for="">Slider Image Upload</label>
              <input type="file" name="image" class="form-control"value="{{$slider->heading}}">
              <img src="{{asset('Uploads/slider/'.$slider->image)}}" width="100px" height="100px">
            </div>

            <div class="form-group">
              <label for="">Status</label>
              <input type="checkbox" name="status" {{$slider->status == '1' ? 'checked':''}}> 0=visible, 1=hidden
            </div>
            
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          
        </div>
        
      </div>
      
    </div>
    
  </div>
  
</div>
        
      </div>
        <!-- partial -->
      
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     <!-- here we some script part -->
     @include('admin.script')
  </body>
</html>