
  
    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 400px;
  }
  </style>


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
    .ourser{
      text-align: center;
      
      
}
    #ourservices{
      position: relative; top: 30px;
    }
    #ourservice{
      position: relative; 
      margin-top: 40px;

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
              <a href="#"><span class="mai-call text-" style="color: goldenrod;"></span>6203677448</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-" style="color: goldenrod;"></span> drfaizashraf.87.born@gmail.com</a>
              
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span style="color: goldenrod;" class="mai-logo-facebook-f"></span></a>
              <a href="#"><span style="color: goldenrod;" class="mai-logo-twitter"></span></a>
              <a href="#"><span style="color: goldenrod;" class="mai-logo-dribbble"></span></a>
              <a href="#"><span style="color: goldenrod;" class="mai-logo-instagram"></span></a>
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
            <div class="col-sm-6" id="headingpeople" ><a href="" style="text-decoration: none;"><h1 class="d-inline-block align-text-top" style=" ">PEOPLE &nbsp HEALTH &nbsp ZONE</h1></a></div>
        </div>
        
    </div>

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
              <a class="nav-link" href="{{url('blog')}}">Blog</a>
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

  @if(session()->has('message'))
         <div class="alert alert-success">
            <button type="button"class="close"data-dismiss="alert">x</button>{{session()->get('message')}}
         </div>
         @endif
          
        <!--   Here we use  slider
  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/h4.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div> -->


         <!-- Here we use bootstrap slider -->

         

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    
    @php $i =1; @endphp
    @foreach($slider as $sliders)


    <div class="carousel-item {{ $i == '1' ? 'active':''}}">
      @php $i++; @endphp
      <img src="{{asset('uploads/slider/'.$sliders->image)}}" class="d-block w-100" alt="slider">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$sliders->heading}}</h5>
        <p>{{$sliders->description}}</p>
        <a href="{{$sliders->link}}">{{$sliders->link_name}}</a>

      </div>
    </div>
    @endforeach
    
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>




    




    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h2>Welcome to Your <br><h1>People Health  Club</h1></h2>
            <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
            <a href="{{url('aboutus')}}" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/faizwp.jpeg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->


        <!-- Here we start our services -->
        <div class="container-fluid" id="ourser">
<div class="ourser"><h1>Our Services</h1></div>
</div>
  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container" id="ourservices">
        
        <div class="row justify-content-center" id="ourservice">

          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <!-- <span class="mai-shield-checkmark"></span> -->
                <span class="mai-logo-dribbble"></span>

                 
              </div>
              <p><span>Physical</span> Therapy & Wellness</p>
            </div>
          </div>

          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-shield-checkmark"></span>
                <!-- <span class="mai-chatbubbles-outline"></span> This is use for icon -->
                <!-- mai-logo-dribbble -->

              </div>
              <p><span>Family</span> Wellcare clinic</p>
            </div>
          </div>
          
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>People</span> Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <!-- Here we End our services -->
    

   @include('user.doctor')
   <!-- .page-section -->

  @include('user.appointment')

  @include('user.latestnews')
  <!-- .page-section -->

   <!-- .banner-home -->
    <!-- @include('user.bottombanner') -->

  <footer class="page-footer" id="footerimg">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="{{url('aboutus')}}">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Doctors</a></li>
            <li><a href="#">Blog</a></li>
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
            <li><a href="#">People Pharmacy</a></li>
            <li><a href="#">O P D</a></li>
            <li><a href="#">Physiotherapy</a></li>
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
