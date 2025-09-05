<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trixie’s Café</title>
         <link href="../../../landing-page/assets/logooo.png" rel="icon">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../../landing-page/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Your Daily Cup of Warmth & Good Vibes</span>
                <span class="site-heading-lower">Trixie’s Café</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Trixie’s Café</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('welcome')}}">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('page.about')}}">About</a></li>
                              <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('page.menu')}}">Menu</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('page.products')}}">Products</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('page.storage')}}">Store</a></li>
                         <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('page.contact')}}">Contact</a></li>
                         <li  class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form action="{{route('logout')}}" id="logout-form" method="POST">@csrf</form>
                    </ul>
                </div>
            </div>
        </nav>
       <section class="page-section about-heading">
  <!-- About Trixie’s Café Section -->
<section class="page-section about-heading">
  <div class="container">
    <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../../../landing-page/assets/img/about.jpg" alt="Inside Trixie’s Café" />
    <div class="about-heading-content">
      <div class="row">
        <div class="col-xl-9 col-lg-10 mx-auto">
          <div class="bg-faded rounded p-5">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Coffee with Heart</span>
              <span class="section-heading-lower">About Trixie's Café</span>
            </h2>
            <p>
              Trixie's Café was born from a simple dream to create a warm, welcoming space
              where everyone can slow down, connect, and savor each sip of coffee. Rooted in
              passion and community, we proudly brew locally roasted beans and craft every drink
              with love and care.
            </p>
            <p>
              Whether you're stopping by for your morning brew, meeting up with friends,
              or finding a cozy corner for yourself, we're here to make every visit special.
              Come experience the simple joy of a good cup where there's always
              a seat waiting just for you.
            </p>
            <p class="mt-4 mb-0">
              <strong>Trixie Mae Tinapao</strong><br>
              Owner & Coffee Lover
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<footer class="footer text-faded text-center py-5">
  <div class="container">
    <p class="m-0 small">&copy; Trixie’s Café 2025</p>
  </div>
</footer>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
