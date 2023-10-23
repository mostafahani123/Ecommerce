<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <title>@yield("title")</title>
</head>
<body >
    <nav class="navbar navbar-expand-lg navbar-light bg-dark" >
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="{{url("/")}}">ShopPing</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
            
            <span class="navbar-toggler-icon">
                <a class="nav-link active text-dark" aria-current="page" href="{{route("home")}}">Home</a>
              <a class="nav-link text-dark" href="#">products</a>
              <a class="nav-link text-dark" href="{{url("/create/product")}}">create product</a>
              <a class="nav-link text-dark" href="#">create category</a>
              <a class="nav-link text-dark" href="{{ url("/register") }}">register</a>
              <a class="nav-link text-dark" href="#">login</a>
              <a class="nav-link text-dark" href="#"> Welcome</a>
              <a class="nav-link text-dark" href="{{ url("/users") }}"> Users</a>
              <a class="nav-link text-dark" href="#">logout</a>
            </span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav ">
              <a class="nav-link active text-light" aria-current="page" href="{{"/"}}">Home</a>
              <a class="nav-link text-light" href="#">products</a>
              <a class="nav-link text-light" href="{{url("/create/product")}}">create product</a>
              <a class="nav-link text-light" href="#">create category</a>
              <a class="nav-link text-light" href="{{ url("/register") }}">register</a>
              <a class="nav-link text-light" href="#">login</a>
              <a class="nav-link text-light" href="#"> Welcome</a>
              <a class="nav-link text-light" href="{{ url("/users") }}"> Users</a>
              <a class="nav-link text-light" href="#">logout</a>
             
            </div>
          </div>
        </div>
      </nav>

      @yield('basc-index')
    <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="footer">
    <!-- Footer -->
    <footer
            class="  text-white"
            style="background-color: #141516;"
            >
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">FOOTER CONTENT</h5>
  
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Molestiae modi cum ipsam ad, illo possimus laborum ut
                reiciendis obcaecati. Ducimus, quas. Corrupti, pariatur eaque?
                Reiciendis assumenda iusto sapiente inventore animi?
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>
  
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>
  
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>
  
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Links</h5>
  
              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Link 1</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 2</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 3</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Link 4</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </section>
        <!-- Section: Links -->
  
        <hr class="mb-4" />
  
        <!-- Section: CTA -->
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <span class="me-3">Register for free</span>
            <button type="button" class="btn btn-outline-light btn-rounded">
              Sign up!
            </button>
          </p>
        </section>
        <!-- Section: CTA -->
  
        <hr class="mb-4" />
  
        <!-- Section: Social media -->
        <section class="mb-4 text-center">
          <!-- Facebook -->
          <a
             class="btn btn-outline-light btn-floating m-1"
             href="#!"
             role="button"
             ><i class="fab fa-facebook-f"></i
            ></a>
  
          <!-- Twitter -->
          <a
             class="btn btn-outline-light btn-floating m-1"
             href="#!"
             role="button"
             ><i class="fab fa-twitter"></i
            ></a>
  
          <!-- Google -->
          <a
             class="btn btn-outline-light btn-floating m-1"
             href="#!"
             role="button"
             ><i class="fab fa-google"></i
            ></a>
  
          <!-- Instagram -->
          <a
             class="btn btn-outline-light btn-floating m-1"
             href="#!"
             role="button"
             ><i class="fab fa-instagram"></i
            ></a>
  
          <!-- Linkedin -->
          <a
             class="btn btn-outline-light btn-floating m-1"
             href="#!"
             role="button"
             ><i class="fab fa-linkedin-in"></i
            ></a>
  
          <!-- Github -->
          <a
             class="btn btn-outline-light btn-floating m-1"
             href="#!"
             role="button"
             ><i class="fab fa-github"></i
            ></a>
        </section>
        <!-- Section: Social media -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div
           class="text-center p-3"
           style="background-color: rgba(0, 0, 0, 0.2)"
           >
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/"
           >MDBootstrap.com</a
          >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->
</body>
</html>