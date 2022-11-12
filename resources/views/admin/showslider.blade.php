<style type="text/css">
  #bodyimg{
     background-image: url(../assets/img/d4.jpg);
      background-size: contain;
      object-fit: cover;
      object-position: center;


  }
   tr:nth-child(even) {
    background:goldenrod;
    
}
 tr:nth-child(odd){
  border: 1px solid goldenrod;
 }
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<base href="/public">
  	<!-- Required meta tag -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html --> 
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')

      <div class="container-fluid page-body-wrapper" >
      	
      		
      		
      	<div align="center" style="padding-top:60px;">
          <div class="card-body">
      		<table>
            <thead>
      		
      		<tr  style="background-color:darkgreen;">
      				<th style="padding:10px;">ID</th>
      				<th style="padding:10px;">Heading</th>
      				<th style="padding:10px;">Image</th>
      				<th style="padding:10px;">Status</th>
      				<th style="padding:10px;">Edit</th>
      				<th style="padding:10px;">Delete</th>
      				
      				
      				
      			</tr>
            </thead>

            
      		@foreach($sliders as $slider)
      			<tr align="center">
      				<td>{{$slider->id}}</td>
      				<td>{{$slider->heading}}</td>
      				<td>
                <img src="{{asset('uploads/slider/'.$slider->image)}}" width="100px" alt="5">
              </td>
              <td>
              @if($slider->status=='1')
              hidden
              @else
              visible
              @endif
      				</td>
      				<td><a class="btn btn-primary" href="{{url('updateslider',$slider->id)}}">Edit</a></td>
              <td>
            <a onclick="return confirm('Are you sure delete this')"; class="btn btn-danger" href="{{url('deleteslider',$slider->id)}}" class="btn btn-success">Delete</a>   
              </td>


      			</tr>

      			@endforeach
           
      			</table>

      	</div>
      	
      </div>
      <!-- </div> -->
      <!--   partial
       @include('admin.body') -->
    </div>
    <!-- container-scroller
    plugins:js 
     here we some script part  -->
     @include('admin.script')

  </body>
</html>