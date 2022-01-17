<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/slick-theme.css">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script
      src="https://kit.fontawesome.com/3379299d20.js"
      crossorigin="anonymous"
    ></script>
</head>

<body>
<header>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-3 col-sm-2 col-md-4 col-lg-2">
        <div class="logo-box"><img src="i/logo.png" alt=""></div>
      </div>
      <div class="col-5 col-sm-7 col-md-6 d-flex align-items-center justify-content-end d-block d-lg-none pe-md-4 pe-0">
        
          <button class="btn bg-blue text-white fontw300 font-14 header-btn" type="button" > Contact </button>
          
      </div>
      <div class="col-4 col-sm-3 col-lg-8 col-md-2 d-flex justify-content-end mob-dir" style="
">
        <nav class="navbar navbar-expand-lg navbar-light" style="
">
          <div class="container-fluid">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="navbar-collapse collapse" id="navbarNav" style="">
              <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="#">Description</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Program</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Pricing Overview</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#">Photos &amp; video</a> </li>
              </ul>
            </div>
          </div>
        </nav>
        
      </div>
      <div class="col-4 col-sm-4 col-md-4 col-lg-2 d-flex align-items-center justify-content-end d-none d-lg-block">
       
          <button class="btn bg-blue text-white fontw300 font-14 header-btn" type="button"> Contact </button>
          
      </div>
    </div>
  </div>
</header>
<section class="banner-sec">
  <div class="container">
    <h1>How can we help?</h1>
    <p class="text-white">Our team will be happy to answer your questions </p>
  </div>
</section>
<section class="contact-us-box">
  <div class="container">
    <div class="row">
    @if(session()->has('message'))
    <div id="success" class="alert alert-success">
        {{ session()->get('message') }}
    </div>
  @endif
  @if ($message = Session::get('error'))
    <div id="failure" class="alert alert-danger alert-block">	
        <strong>{{ $message }}</strong>
    </div>
    @endif
      <div class="col-md-10 pe-sm-2 pe-md-3 m-auto">
  
        <div class="contact-boxx d-flex justify-content-between align-items-center">
          <div class="row">
            <h2 class="w-75">Send us a message directly.
              We will respond within 48 hours.</h2>
            <form method="post" action="{{route('submit_contact_us')}}">
                @csrf
              <div class="mb-3 mt-4">
                <input type="text" class="form-control" name="first_name" placeholder="First name">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="last_name" placeholder="Last name">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="E-mail address">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" name="telephone" placeholder="Telephone">
              </div>
              <div class="mb-3">
                <textarea class="form-control" name="description" placeholder="Please fill in your question or remarks." id="floatingTextarea"></textarea>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="term_condition" id="exampleCheck1" value="1">
                <span class="font-14 text-blue">Yes, I would like to sign up for monthly travel inspiration.</span> </div>
              <button type="submit" class="contact-us-btn text-center btn bg-green text-white px-4 font-14 py-2 mt-2">Send Message</button>
            </form>
          </div>
        </div>
   
      </div>
      
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4 mb-sm-0">
        <div class="footer-box footer-logo"> <img src="i/logo.png" alt="">
          <p>@2021 Sgb Noleggio Srl</p>
          <h4>Opening Time</h4>
          <p>9.00am - 7:00pm (Mon-Sun)</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-5 mb-sm-0">
        <div class="footer-box payment-card">
          <h4>Payment Methods</h4>
          <img src="i/payments-card.png" alt="">
          <h4 class="mt-3">Bicycl-e on the web!</h4>
          <div class="social-box"> <a href="#"> <i class="fab fa-facebook-f" aria-hidden="true"></i> </a> <a href="#"> <i class="fab fa-instagram" aria-hidden="true"></i></a> <a href="#"> <i class="fab fa-youtube" aria-hidden="true"></i></a> <a href="#"> <i class="fab fa-pinterest"></i></a> </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mt-5 mt-md-0 mb-4 mb-sm-0">
        <div class="footer-box">
          <h4>Policy &amp; Terms of Use</h4>
          <ul class="list-unstyled">
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Biking Rules &amp; Safety</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Cookie Policy</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mt-lg-0 mt-5 col-sm-6 mt-sm-5">
        <div class="footer-box">
          <h4>Contacts</h4>
          <p>Phone +39 3510043528<br>
            Email: info@bicycl-e.com</p>
          <h4>Locations</h4>
          <div class="textwidget">
            <p><strong>ROME</strong><br>
              1) VILLA BORGHESE: Lungotevere delle Armi 44<br>
              2) APPIA ANTICA: Via Appia Antica 175<br>
              3) TRASTEVERE: Via Francesco Benaglia 13 (Hostel Trustever)<br>
              4) PARCO TOR FISCALE: Vicolo dell’Acquedotto Felice 30</p>
            <p><strong>CASTELLI ROMANI</strong><br>
              1) CASTELGANDOLFO: Via dei Pescatori 9/a (Circolo Kayak Castelgandolfo)<br>
              2) ARICCIA: Piazzale dei Daini 1 (Parco Romano Biodistretto)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
  setTimeout(function() {$('#success').fadeOut();}, 3000);
  setTimeout(function() {$('#failure').fadeOut();}, 3000);
</script>

</html>
