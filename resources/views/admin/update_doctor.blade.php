
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

      	 @if(session()->has('message'))
         <div class="alert alert-success">
            <button type="button"class="close"data-dismiss="alert">x</button>{{session()->get('message')}}
         </div>
         @endif
      	<div class="container" align="center" style="padding-top:60px">
      		
      		<form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
      		



      			@csrf
      			
      			<div style="padding:15px;">
      				<label>Doctor Name</label>
      				<input type="text" style="color:black" name="name" value="{{$data->name}}">
      			</div>

      			<div style="padding:15px;">
      				<label>Phone</label>
      				<input type="number" style="color:black" name="phone" value="{{$data->phone}}">
      			</div>

      			<div style="padding:15px;">
      				<label>Speciality</label>
      				<input type="text" style="color:black" name="speciality" value="{{$data->speciality}}">
      			</div>

      			<div style="padding:15px;">
      				<label>Room No</label>
      				<input type="text" style="color:black" name="room" value="{{$data->room}}">
      			</div>

      			<div style="padding:15px;">
      				<label>Old Image</label>
      				<img height="150px" width="150px" src="doctorimage/{{$data->image}}">
      			</div>

      			<div style="padding:15px;">
      				<label>Change Image</label>
      				<input type="file" name="file">
      			</div>

      			<div style="padding:15px;">
      				<input type="submit" class="btn btn-success">
      			</div>

      			
      		</form>
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