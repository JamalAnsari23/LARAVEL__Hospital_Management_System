<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>People Health Club</title>

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

       <!--  <form action="#">
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
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('aboutus')}}">About Us</a>
            </li>
            <li class="nav-item active">
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

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Doctors</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Our Doctors</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->


 <!-- HEre we start appointment   -->                                          


<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp" style="font-size: xx-large;">Make an Appointment</h1>

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
        

        <button type="submit" style="color:black; background-color: ;" class="btn btn-outline-primary">Submit Request</button>
        

      </form>
    </div>
  </div>                                           
 
         

  <!--   HEre we  End  appointment            -->
 

<!-- HEre we start doctor  -->
<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp" style="font-size:xx-large ;"> Our Doctors</h1>

      
      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach($doctor as $doctors)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img style="height: 300px !important" src="doctorimage/{{$doctors->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->speciality}}</span>
            </div>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>

        


        

 
   


  <!-- <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option value="general">General Health</option>
              <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form> -->
    <!-- </div> 
  </div>  -->
  <!-- .container -->
  <!-- .page-section -->
  

  <!-- <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../assets/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
          <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div>  --><!-- .banner-home -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="{{url('aboutus')}}">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Doctors</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">Ashraf Pharmacy</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">Buddha Colony Opposite:W.H Khan</p>
          <a href="#" class="footer-link">7488122480</a>
          <a href="#" class="footer-link">drfaizashraf.87.born@gmail.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2022  &nbsp All right reserved            &nbsp <br> by&nbsp<a href="#" target="_blank">Md Jamal Ansari</a>.</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>