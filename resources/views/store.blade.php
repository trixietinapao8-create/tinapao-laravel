<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trixie’s Café</title>
        <link rel="icon" type="image/x-icon" href="../../../landing-page/assets/favicon.ico" />

         <link href="../../../landing-page/assets/logooo.png" rel="icon">
        <link href="../../../landing-page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
      <!-- CTA Section: Hours & Contact -->
<section class="page-section cta">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="cta-inner bg-faded text-center rounded">
          <h2 class="section-heading mb-5">
            <span class="section-heading-upper">Come On In</span>
            <span class="section-heading-lower">We're Open</span>
          </h2>
          <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
            <li class="list-unstyled-item list-hours-item d-flex">
              Sunday
              <span class="ms-auto">8:00 AM – 2:00 PM</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Monday
              <span class="ms-auto">6:30 AM – 7:00 PM</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Tuesday
              <span class="ms-auto">6:30 AM – 7:00 PM</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Wednesday
              <span class="ms-auto">6:30 AM – 7:00 PM</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Thursday
              <span class="ms-auto">6:30 AM – 7:00 PM</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Friday
              <span class="ms-auto">6:30 AM – 8:00 PM</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              Saturday
              <span class="ms-auto">7:00 AM – 4:00 PM</span>
            </li>
          </ul>
          <p class="address mb-5">
            <em>
              <strong>Villarreal St. Catalina</strong><br />
            Bayawan City Negros Oriental
            </em>
          </p>
          <p class="mb-0">
            <small><em>Call Anytime</em></small><br />
               09811791540
          </p>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small"> &copy;  Trixie’s Café 2025</p></div>
        </footer>
        
</section>
