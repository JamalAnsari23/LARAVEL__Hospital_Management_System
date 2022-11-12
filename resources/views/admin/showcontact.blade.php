
<!DOCTYPE html>
<html lang="en">
  <head>
  	<!-- Required meta tag -->
    @include('admin.css')
    <style type="text/css">
     
      tr:nth-child(even) {
    background:goldenrod;
    
}
 tr:nth-child(odd){
  border: 1px solid goldenrod;
 }
      
     
    </style>
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
      </div> -->
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
      	<div align="center" style="padding-top:100px;">
      		<table>
      			<tr style=" background-color:darkgreen; text-align: center;">
      				<th style="padding:10px">CUSTOMER NAME</th>
      				<th style="padding:10px">EMAIL</th>
      				<th style="padding:10px">PHONE</th>
      				<th style="padding:10px">SUBJECT</th>
      				<th style="padding:10px">MESSAGE</th>
      				<!-- <th style="padding:10px">Send Mail</th> -->
      			</tr>
      			@foreach($data as $contact)

      			<tr align="center" style="background-color:;">
      				<td>{{$contact->name}}</td>
      				<td>{{$contact->email}}</td>
      				<td>{{$contact->phone}}</td>
      				<td>{{$contact->subject}}</td>
      				<td>{{$contact->message}}</td>
      				<!-- <td>
      					<a class="btn btn-primary" href="{{url('viewemail',$contact->id)}}">Send Mail</a>
      				</td> -->
      				
      			</tr>
      			@endforeach
      		</table>
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