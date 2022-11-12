
  
    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>People Health Club </title>

  <style type="text/css">
    #navimg{
      background-image: url(../assets/img/bgnav6.jpg);
      background-size: contain;
      object-fit: cover;
      object-position: center;

    }
   /* #navbarimg{
      
       background-image: url(../assets/img/bgnav4.jpg);
      object-fit: cover;

    }*/
    #footerimg{
      background-image: url(../assets/img/bgnav6.jpg);
      background-size: contain;
      object-fit: cover;
      object-position: center;
    }
    #headingpeople h1{
      color: goldenrod;
      text-decoration: none;
      display: flex;
      position:relative; top:15px;
      font-family:ui-rounded;
      font-size: 3.2rem;

    }
  </style>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>

    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-" style="color: darkgoldenrod;"></span>6203677448</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-" style="color: darkgoldenrod;"></span> drfaizashraf.87.born@gmail.com</a>
              
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span style="color: darkgoldenrod;" class="mai-logo-facebook-f"></span></a>
              <a href="#"><span style="color: darkgoldenrod;" class="mai-logo-twitter"></span></a>
              <a href="#"><span style="color: darkgoldenrod;" class="mai-logo-dribbble"></span></a>
              <a href="#"><span style="color: darkgoldenrod;" class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

     <!-- Here we start middlebar -->

 <div class="container-fluid">
        <div class="row content" id="navimg" style="background-color:lightgrey;">
            <div class="col-sm-4 "><a class="navbar-brand" href="#">
      <img src="../assets/img/ashraflogo.png" style="margin-left:130px;" alt="" width="80" height="75" class="d-inline-block align-text-top">
    </a></div>
            <div class="col-sm-6" id="headingpeople" ><a href="" style="text-decoration: none;"><h1 class="d-inline-block align-text-top" style=" ">PEOPLE HEALTH CLUB</h1></a></div>
        </div>
        
    </div>

   <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container" id="navbarimg">
        <!-- <a class="navbar-brand" href="#">
      <img src="../assets/img/ashraflogo.png" style="margin-left: 5px;" alt="" width="60" height="55">
    </a>
        <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">Ashraf </span> Health Club</a>
         <a class="navbar-brand" href="{{url('/')}}" ><span class="text-primary"><h7  style="color:darkgoldenrod;"> People </h7></span> <h7 style="color: darkgoldenrod;">Health club</h7></a> -->
         <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container" id="navbarimg">
<button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#staticBackdrop">
  Make an Appointment
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Make an Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">     
        <!-- <div class="back-to-top"></div> -->
      <form class="main-form" action="{{url('appointment')}}" method="POST">

      @csrf

        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">

              <option>---Select Doctor---</option>
              @foreach($doctor as $doctors)

          <option value="{{$doctors->name}}">{{$doctors->name}}---Speciality--- {{$doctors->speciality}}</option>

              @endforeach
              
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>
        
      <div>
        <button type="submit" style="color:black;" class="btn btn-outline-primary">Submit Request</button>
        </div>
        <!-- btn btn-success mt-3 wow zoomIn -->

      </form>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Understood</button>
      </div>
    </div>
  </div>
</div>

        <!-- <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('aboutus')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('doctorspage')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('blog')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contactus')}}">Contact</a>
            </li>

            @if(Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link btn btn-outline-warning" style=" color: black;" href="{{url('myappointment')}}">My Appointment</a>
            </li>

            <x-app-layout>
    
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-outline-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>
             <li class="nav-item">
              <a class="btn btn-outline-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>

            @endauth

            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div align="center" style="padding:70px;">
  	<table>
  		<tr style="background-color:black;">
  	<th style="padding: 10px; font-size: 20px; color: white;">DoctorName</th>
  	<th style="padding: 10px; font-size: 20px; color: white;">Date</th>
  	<th style="padding: 10px; font-size: 20px; color: white;">Message</th>
  	<th style="padding: 10px; font-size: 20px; color: white;">Status</th>
  	<th style="padding: 10px; font-size: 20px; color: white;">Cancel Appointment</th>
  		</tr>

        @foreach($appoint as $appoints)

  		<tr style="background-color:lightgrey;" align="center">
  		<td style="padding: 10px; font-size: 20px; color: black;">{{$appoints->doctor}}</td>
  		<td style="padding: 10px; font-size: 20px; color: black;">{{$appoints->date}}</td>
  		<td style="padding: 10px; font-size: 20px; color: black;">{{$appoints->message}}</td>
  		<td style="padding: 10px; font-size: 20px; color: black;">{{$appoints->status}}</td>
  		<td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete this')" href="{{url('cancel_appoint',$appoints->id)}}">Cancel</a></td>
  	</tr>

  	@endforeach

  	</table>
  </div>



 

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>
