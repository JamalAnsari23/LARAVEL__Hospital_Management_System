
<!DOCTYPE html>
<html lang="en">
  <head>
  	<!-- Required meta tag -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')

      <div class="container-fluid page-body-wrapper" >
      	<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			@if (session('status'))
			<h4 class="alert alert-success">{{session('status')}}</h4>
			@endif
			<div class="card">
				<div class="card-header">
					<h4> Add Slider
						<a href="" class="btn btn-danger btn-sm float-right">Back</a>
					</h4>
					
				</div>
				<div class="card-body">
					<!-- Your slider data -->
					<form action="{{ url('store_slider')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="">Heading</label>
							<input type="text" name="heading" class="form-control">
						</div>

						<div class="form-group">
							<label for="">Description</label>
							<textarea style="background: white;" name="description" class="form-control"></textarea>
						</div>

						<div class="form-group">
							<label for="">Link</label>
							<input type="text" name="link" class="form-control">
						</div>

						<div class="form-group">
							<label for="">Link Name</label>
							<input type="text" name="link_name" class="form-control">
						</div>

						<div class="form-group">
							<label for="">Slider Image Upload</label>
							<input type="file" name="image" class="form-control">
						</div>

						<div class="form-group">
							<label for="">Status</label>
							<input type="checkbox" name="status"> 0=visible, 1=hidden
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
      <!--   partial
       @include('admin.body') -->
    </div>
    <!-- container-scroller
    plugins:js 
     here we some script part  -->
     @include('admin.script')

  </body>
</html>

