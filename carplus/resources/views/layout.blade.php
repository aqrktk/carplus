<!DOCTYPE html>
<html>
<head>
	<title>Car Showroom</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/293f55e5c2.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="padding: 0px; margin: 0px">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h1> &nbsp Car Plus</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link active"  href="index">Home <span class="sr-only"></span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Buy Car
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Pakistani</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Imported</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sell Car
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="sell">Pakistani</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Imported</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About Us</a>
      </li>
      <li class="nav-item">
      <a   class="nav-link" href="services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="location">Location</a>
      </li>
    </ul>

    <button type="button" class="btn btn-primary" name="login" style="margin:2px;">
      <a href="login" style="text-decoration-style: none; color: white;">Login</a>
     </button>
    <button type="button" class="btn btn-secondary" name="signup" style="margin:3px;" >
     <a href="signup" style="text-decoration-style: none; color: white;">SignUp</button>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container-fluid" style="padding: 0px;margin: 0px">
      @yield('content')
    </div>
<footer class="page-footer font-small mdb-color lighten-3 pt-4 bg-light">
  <div class="container text-center text-md-left">
    <div class="row">
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
        <h5 class="font-weight-bold text-uppercase mb-4">Car Plus</h5>
        <p>Here you can sell or buy cars without any problem. The best car deals in area.</p>

      </div>

      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">PROJECTS</a>
            </p>
          </li>
          <li>
            <p>
              <a href="about">ABOUT US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">BLOG</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">AWARDS</a>
            </p>
          </li>
        </ul>

      </div>
      <hr class="clearfix w-100 d-md-none">

      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i> Barrier 2, Wah Cantt, Punjab, Pakistan</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> carplus@gmail.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> +92 314 5596024</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i> +92 314 9022028</p>
          </li>
        </ul>

      </div>
      <hr class="clearfix w-100 d-md-none">
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">
        <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>
        <a type="button" class="btn-floating btn-fb">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a type="button" class="btn-floating btn-tw">
          <i class="fab fa-twitter">twitter</i>
        </a>
        <a type="button" class="btn-floating btn-gplus">
          <i class="fab fa-google-plus-g"></i>
        </a>
        <a type="button" class="btn-floating btn-dribbble">
          <i class="fab fa-dribbble"></i>
        </a>

      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#"> Carplus.com</a>
  </div>

</footer>
  </body>
</html>