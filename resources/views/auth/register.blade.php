
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <title></title>
</head>
<body >

{{--     
<!--Main Navigation-->
<header class="bg-dark">
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark">
    <div class="position-sticky bg-dark">
      <div class="list-group list-group-flush mx-3 mt-4 bg-dark">
        <a href="#" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>ShOping</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Home</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-lock fa-fw me-3"></i><span>Product</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-globe fa-fw me-3"></i><span>International</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-building fa-fw me-3"></i><span>Partners</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a>
      </div>
    </div>
  </nav>
  <!-- Sidebar --> --}}

</header >
<!--Main Navigation-->
<h1 class="text-center mt-5 text-light">Register Now !</h1>
<!--Main layout-->

<!--Main layout-->
<form style="width: 50%; margin-left:60vh;" class="mb-5 " method="POST" action="{{ url('/register') }}">
  @csrf
              <div class="mb-3 mt-3 " >
                  <input type="text" class="form-control bg-dark text-light"  id="email"  placeholder="Enter username" name="fristname">
              </div>
              <div class="mb-3 mt-3 ">
                   <input type="text" class="form-control bg-dark text-light" id="email"   placeholder="Enter lastname" name="Lastname">
              </div>
              <div class="mb-3 mt-3 ">
                  <input type="email" class="form-control bg-dark text-light" id="email"   placeholder="Enter email" name="Email">   
              </div>
              <div class="mb-3 mt-3 ">
                 <input type="number" class="form-control bg-dark text-light" id="email"   placeholder="Enter number" name="Number">
              </div>
              <div class="mb-3 mt-3 ">
                <input type="password" class="form-control bg-dark text-light" id="email"  placeholder="Enter password" name="password">
              </div>
    <button type="submit" class="btn btn-primary">Register</button>
  </form>

    <!-- Remove the container if you want to extend the Footer to full width. -->

  <!-- End of .container -->
</body>
</html>